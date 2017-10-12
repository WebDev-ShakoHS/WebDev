// JavaScript Document
/**
 * @file
 * Tetris game.
 */

var Tetris = (function() {
"use strict";

/**
 * Initialize the game.
 */
function Tetris() {
  var state,
    renderer,
    keyboard,
    gameLoopTimerID;

  var gameLoop = function() {
    if (state.block.replace === true) {
      state.block = new Block(state);
      if (state.gameField.check_direction(state.block)) {
        clearInterval(gameLoopTimerID);
        gameOver();
        this.init(state.canvas_id);
      }
    }

    down.call(this);

    renderer.draw(state);
  };

  var right = function() {
    if (state.block.x < (state.playAreaX - state.block.width())) {
      var hit_something = state.gameField.check_direction(state.block, "r");

      if (!hit_something) {
        state.block.x++;
        renderer.draw(state);
      }
    }
  };

  var left = function() {
    if (state.block.x > 0) {
      var hit_something = state.gameField.check_direction(state.block, "l");

      if (!hit_something) {
        state.block.x--;
        renderer.draw(state);
      }
    }
  };

  var up = function() {
    state.block.orientation += 90;
    if (state.block.orientation >= 360) {
      state.block.orientation -= 360;
    }
    renderer.draw(state);
  };

  var down = function() {
    state.block.down();

    renderer.draw(state);

    clearInterval(gameLoopTimerID);
    gameLoopTimerID = setInterval(
      (function(self) {
        return function() {
          gameLoop.call(self);
        };
      })(this),
      calculate_loop_timer(state.loop_timer, state.level)
    );

  };

  /**
   * Function for decrementing the timer interval as the level goes up.
   * @TODO How expensive is pow()? Could it ever be worthwhile to memoize this?
   */
  var calculate_loop_timer = function(start, level) {
    return start * Math.pow(0.95, level);
  };

  this.init = function(canvas_id) {
    var debug = getUrlVars().debug;

    state = new GameState();
    state.canvas_id = canvas_id;
    renderer = new Canvas_renderer(canvas_id);
    keyboard = new Keyboard();
    document.onkeydown = keyboard.event;

    gameLoopTimerID = setInterval(
      (function(self) {
        return function() {
          gameLoop.call(self);
        };
      })(this),
      state.loop_timer
    );

    if (debug) {
      render_debug_grid();
    }

    // Map keypresses to function calls.
    keyboard.add(keyboard.right, right);
    keyboard.add(keyboard.left, left);
    keyboard.add(keyboard.up, up);
    keyboard.add(keyboard.down, (function(self) {
      return function() {
        down.call(self);
      };
    })(this));
    renderer.draw(state);
  };

  var gameOver = function() {
    alert("Game over\nYour score is: " + state.score.getScore() + "\nPress ok to start a new game");
  };

  var render_debug_grid = function() {
    var t = document.createElement("table"),
      tb = document.createElement("tbody"),
      tr, td,
      y, x;

    for (y = 0; y < state.playAreaY; y++) {
      tr = document.createElement("tr");
      for (x = 0; x < state.playAreaX; x++) {
        td = document.createElement("td");
        td.appendChild(document.createTextNode(x + "," + y));
        td.style.width = "21";
        td.style.height = "23";
        tr.appendChild(td);
      }
      tb.appendChild(tr);
    }

    t.style.position = "absolute";
    t.style.fontSize = "10px";

    t.appendChild(tb);

    document.getElementById("debug_grid").appendChild(t);
  };
}

/**
 * Keep track of the games internal state.
 */
function GameState() {
  // Numbers make the layouts much easier to read, therefore relying on JS
  // to cast 0 to false and 1 to true instead of using real booleans.
  this.available_layouts = [
    [
      [0,1,0],
      [1,1,1]
    ], [
      [0,0,1],
      [1,1,1]
    ], [
      [1,0,0],
      [1,1,1]
    ], [
      [0,1,1],
      [1,1,0]
    ], [
      [1,1,0],
      [0,1,1]
    ], [
      [1],
      [1],
      [1],
      [1]
    ], [
      [1,1],
      [1,1]
    ] ];
  // @TODO Improve color selection http://gamedev.stackexchange.com/questions/46463/is-there-an-optimum-set-of-colors-for-10-players/46467#46467
  this.layout_colors = [
    "rgb(255, 0, 0)",
    "rgb(255, 255, 0)",
    "rgb(255, 0, 255)",
    "rgb(127, 0, 0)",
    "rgb(127, 127, 0)",
    "rgb(127, 0, 127)",
    "rgb(127, 127, 127)"
  ];

  this.playAreaX = 11;
  this.playAreaY = 20;
  this.blockSize = 15;
  this.block = new Block(this);
  this.gameField = new GameField(this);
  this.score = new Score();

  this.loop_timer = 1000;

  this.removed_lines = 0;

  this.level = 0;

  this.canvas_id = '';
}

function GameField(gameState) {
  var state = gameState,
    gameField = [],
    x, y;

  for (x = 0; x < state.playAreaX; x++) {
    gameField[x] = [];
    for (y = 0; y < state.playAreaY; y++) {
      gameField[x][y] = false;
    }
  }

  /**
   * Render the gamefield onto the canvas.
   */
  this.draw = function(ctx) {
    var i, x, y;

    // Clear out the play field.
    ctx.fillStyle = "rgb(255, 255, 255)";
    ctx.fillRect(0, 0, (state.playAreaX * state.blockSize), (state.playAreaY * state.blockSize));

    //Background stripes, mostly for debugging.
    ctx.fillStyle = "rgba(127, 75, 0, 0.3)";

    for (i = 0; i < (state.playAreaX * state.blockSize); i += state.blockSize * 2) {
      ctx.fillRect(i, 0, state.blockSize, (state.playAreaY * state.blockSize));
    }

    ctx.fillStyle = "rgb(255, 255, 0)";
    for (x = 0; x < state.playAreaX; x++) {
      for (y = 0; y < state.playAreaY; y++) {
        if (gameField[x][y] === true) {
          ctx.fillRect(x * state.blockSize + 1, y * state.blockSize + 1, state.blockSize - 2, state.blockSize - 2);
        }
      }
    }
  };

  /**
   * Check whether the next square in any direction is filled.
   */
  this.check_direction = function(block, direction) {
    var hit_something = false,
      render_offsets = { "x": 0, "y": 0 },
      step, filled,
      render_coord_x, render_coord_y;

    for (step = 0; step < block.width() * block.height(); step++) {
      render_coord_x = state.block.x + render_offsets.x;
      render_coord_y = state.block.y + render_offsets.y;

      switch (direction) {
        case "u": render_coord_y--; break;
        case "r": render_coord_x++; break;
        case "d": render_coord_y++; break;
        case "l": render_coord_x--; break;
      }

      if (gameField[render_coord_x][render_coord_y]) {
        filled = block.piece_filled(step);

        if (filled) {
          hit_something = true;
          break;
        }
      }

      render_offsets = block.update_render_offsets(render_offsets);
    }

    return hit_something;
  };

  /**
   * Check the current position of the active block and take appropriate action.
   * @TODO Function naming doesn't make sense anymore.
   */
  this.check_hit_bottom = function(block) {
    var hit_something = this.check_direction(block, "d"),
      render_offsets, render_coord_x, render_coord_y,
      step, filled;

    if (block.y + block.height() >= gameField[0].length) {
      hit_something = true;
    }

    if (!hit_something) {
      return;
    }

    // The active block has hit something below, and should be pushed to the
    // permanent gamefield.
    block.replace = true;
    render_offsets = { "x": 0, "y": 0 };

    for (step = 0; step < block.width() * block.height(); step++) {
      render_coord_x = block.x + render_offsets.x;
      render_coord_y = block.y + render_offsets.y;

      filled = block.piece_filled(step);

      if (filled) {
        gameField[render_coord_x][render_coord_y] = true;
      }

      render_offsets = block.update_render_offsets(render_offsets);
    }

    this.check_for_full_lines();
  };

  /**
   * Scan a line for it being full. If so remove it.
   *
   * @TODO This logic could be easier if the gamefield array's were inverted,
   * but that might complicate a lot of other logic. Investigate?
   */
  this.check_for_full_lines = function() {
    var full_lines = 0,
      y, x,
      line_piece_count;

    for (y = 0; y < gameField[0].length; y++) {
      line_piece_count = 0;
      for (x = 0; x < gameField.length; x++) {
        gameField[x][y] && line_piece_count++;
      }

      if (line_piece_count === gameField.length) {
        full_lines++;
        for (x = 0; x < gameField.length; x++) {
          gameField[x].splice(y, 1);
          gameField[x].unshift(false);
        }
      }
    }

    if (full_lines > 0) {
      state.score.removed_lines(full_lines);
    }

    state.level += 0.1 * full_lines;
  };
}

function Score() {
  var score = 0,
    line_score = 1000,
    multi_line_bonus = true;

  this.removed_lines = function(num_lines) {
    var bonus = num_lines * line_score;
    if (multi_line_bonus) {
      bonus *= num_lines;
    }
    score += bonus;
  };

  this.draw = function() {
    var score_div = document.getElementById("score");
    if (score_div !== null) {
      score_div.innerHTML = score;
    }
  };

  this.getScore = function() {
    return score;
  };
}

/**
 * Functionality of a single falling tetris block.
 */
function Block(state) {
  this.type = Math.ceil(Math.random() * 7) - 1;
  this.color = state.layout_colors[this.type];

  this.orientation = 0;

  var layout = state.available_layouts[this.type];


  this.height = function () {
    if (this.orientation === 0 || this.orientation === 180) {
      return layout.length;
    }
    return layout[0].length;
  };

  this.width = function () {
     if (this.orientation === 90 || this.orientation === 270) {
      return layout.length;
    }
    return layout[0].length;
  };

  this.x = Math.floor(state.playAreaX / 2 - this.width() / 2);
  this.y = 0;

  this.draw = function (ctx) {
    ctx.fillStyle = this.color;

    var render_offsets = { "x": 0, "y": 0 },
      step, filled,
      render_coord_x, render_coord_y;

    for (step = 0; step < this.width() * this.height(); step++) {
      filled = this.piece_filled(step);

      // Render if necessary.
      if (filled) {
        render_coord_x = (this.x + render_offsets.x) * state.blockSize;
        render_coord_y = (this.y + render_offsets.y) * state.blockSize;

        ctx.fillRect(render_coord_x + 1, render_coord_y + 1, state.blockSize - 2, state.blockSize - 2);
      }

      render_offsets = this.update_render_offsets(render_offsets);
    }
  };

  /**
   * The naming and use of this function needs a review.
   */
  this.update_render_offsets = function(render_offsets) {
    render_offsets.x++;

    if (render_offsets.x >= this.width()) {
      render_offsets.y++;
      render_offsets.x = 0;
    }

    return render_offsets;
  };

  /**
   * Figure out if the current piece in a block is filled..
   */
  this.piece_filled = function (step) {
    var coordinates = this.step_to_rotated_coordinates(step),
      filled = layout[coordinates.y][coordinates.x];
    return !!filled;
  };

  /**
   * Converts "search steps" into local x/y coordinates.
   */
  this.step_to_coordinates = function(step) {
    var coords = { x: 0, y: 0 };

    if (this.orientation === 0 || this.orientation === 180) {
      coords.x = step % this.width();
      coords.y = Math.floor(step / this.width());
    }
    else {
      coords.x = Math.floor(step / this.width());
      coords.y = ((step + 1) % this.width());
    }

    return coords;
  };

  /**
   * Converts "search steps" into local x/y coordinates adjusted for piece
   * rotation.
   */
  this.step_to_rotated_coordinates = function(step) {
    var coords = this.step_to_coordinates(step);

    if (this.orientation === 180) {
      coords.x = this.width() - coords.x - 1;
      coords.y = this.height() - coords.y - 1;
    }
    else if (this.orientation === 270) {
      coords.x = this.width() - coords.x;
      // @TODO Ugly hack. Figure out and fix.
      if (this.type === 6) { coords.x--; }
      if (this.width() === 4) { coords.x -= 4; }
      coords.y = this.width() - coords.y - 1;
    }

    return coords;
  };

  this.down = function () {
    state.gameField.check_hit_bottom(state.block, "d");

    if (state.block.replace !== true) {
      this.y += 1;
    }
  };
}

/**
 * Render the game surface on a canvas.
 */
function Canvas_renderer(canvas_id) {
  this.draw = function(state) {
    var canvas = document.getElementById(canvas_id),
      ctx = canvas.getContext("2d");

    state.gameField.draw(ctx);
    state.block.draw(ctx);
    state.score.draw();
  };
}

/**
 * Keep track of list of keypress to function callback mapping.
 */
function Keyboard() {
  // Make assigning keys easier.
  this.up = 38;
  this.right = 39;
  this.left = 37;
  this.down = 40;

  var callbacks = {};

  //Register a new hook
  this.add = function(key, callback) {
    callbacks[key] = callback;
  };

  // onkeydown callback.
  this.event = function(e) {
    if (callbacks[e.keyCode] === undefined) {
      return;
    }

    callbacks[e.keyCode]();
  };
}

/**
 * Print, debugging tool.
 */
function p(text) {
  var debug_div = document.getElementById("debug_messages");
  if (debug_div !== null) {
    debug_div.innerHTML = text + '<br/> ' + debug_div.innerHTML;
  }
}

function getUrlVars() {
  var vars = {};
  window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
    vars[key] = value;
  });
  return vars;
}

  return new Tetris();
})();