var Chat = document.getElementById("Chat");
var Chatbody = document.getElementById("ChatBody");
var CurrentTypers = document.getElementById("Typers");
var TypingBody = document.getElementById("TypingBody");
var Textbox = document.getElementById("Textbox");
var Header = document.getElementById("Header");
var MainBody = document.getElementById("MainBody");

var clicked = false;
var typing = {};
var chatinfo = {};
var image;
var botimage;
var bots = {
    [1]: {
        name: "laurenbtd5",
        messages: {
            [1]: {
                Text: "hi"
            },
            [2]: {
                Text: "is anyone here"
            },
            [3]: {
                Text: "trolololol"
            }
        },
    },
    [2]: {
        name: "bobbo",
        messages: {
            [1]: {
                Text: "go away noob"
            },
            [2]: {
                Text: "lelELLe"
            },
            [3]: {
                Text: "ez'd noob!"
            }
        },
    },
    [3]: {
        name: "XxProGamer360xX",
        messages: {
            [1]: {
                Text: "lol chat dead"
            },
            [2]: {
                Text: "1v1 me on black ops nerd"
            },
            [3]: {
                Text: "LOL"
            }
        },
    },
};

function addImage(id) {
    var input = document.getElementById(id);
    image = input.files[0];
}

function Random(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function addButtons(message, speaker, currentimage) {
    var row = message.parentElement;
    if (currentimage != null) {
        var reader = new FileReader();
        var input = document.getElementById("ImageApply");
        reader.onload = function (e) {
            var img = document.createElement("img");
            img.alt = currentimage;
            img.src = e.target.result;
            message.append(img);
            input.value = null;
        }
        reader.readAsDataURL(currentimage);
    }
    if(speaker == "You") {

    var deletebutton = document.createElement("button");
    deletebutton.innerHTML = "Delete Message";
    deletebutton.className = "MessageOption";
    message.append(deletebutton);
    deletebutton.onclick = function () {
        if (confirm("Are you sure you want to delete this message?")) {
            row.deleteCell(message.cellIndex);
            if (row.cells.length == 1) {
                Chatbody.deleteRow(row.rowIndex);
                chatinfo.speaker = null;
            }
        }
    }
    var defaultmessage = "Edit Message";
    var editbutton = document.createElement("input");
    editbutton.placeholder = defaultmessage;
    editbutton.className = "MessageOption";
    message.append(editbutton);
    
    editbutton.addEventListener("focus", function () {
        editbutton.placeholder = "(Enter to confirm)";
    })
    editbutton.addEventListener("blur", function () {
        editbutton.placeholder = defaultmessage;
    })
    editbutton.addEventListener("keypress", function (input) {
        if ((editbutton.value != "") && (input.key == "Enter") && (editbutton.value != message.innerText)) {
            if (confirm("Are you sure you want to change message (" + message.innerText + ") to (" + editbutton.value + ")?")) {
                message.innerHTML = editbutton.value;
                addButtons(message, speaker, currentimage);
            }
        }
    })
}
}

function AddToTyping(speaker) {
    if (speaker in typing == false) {
        var box = TypingBody.insertCell(TypingBody.cells.index);
        typing[speaker] = {
            Box: box,
            Speaker: speaker
        };
        if (box.cellIndex == 0) {
            box.innerHTML = speaker + " is typing";
        } else {
            box.innerHTML = ", and " + speaker + " is typing";
        }
    }
}

function RemoveFromTyping(speaker) {
    if (typing.hasOwnProperty(speaker)) {
        TypingBody.deleteCell(typing[speaker].Box.cellIndex);
        delete typing[speaker];
        for (var key in typing) {
            if (typing.hasOwnProperty(key)) {
                var box = typing[key].Box;
                var keyspeaker = typing[key].Speaker;
                if (box.cellIndex == 0) {
                    box.innerHTML = keyspeaker + " is typing";
                } else {
                    box.innerHTML = ", and " + keyspeaker + " is typing";
                }
            }
        }
    }
}

function EnterMessage(currentspeaker, msg) {
    if (msg != "") {
        var rowindex = Chatbody.rows.length;
        var row;
        var index = 1;
        if (chatinfo.speaker != currentspeaker) {
            row = Chatbody.insertRow(rowindex);
            var header = document.createElement("th");
            header.innerHTML = currentspeaker;
            row.append(header);
        } else {
            rowindex -= 1;
            row = Chatbody.rows[rowindex];
            index = row.cells.length;
        }
        var message = row.insertCell(index);
        message.innerHTML = msg;
        var currentimage = image;
        if(currentspeaker != "You") {
            currentimage = botimage;
        }
        addButtons(message, currentspeaker, currentimage);
        image = null;
        chatinfo.speaker = currentspeaker;
    }
}

Textbox.addEventListener("focus", function () {
    clicked = true;
})

Textbox.addEventListener("blur", function () {
    clicked = false;
})

document.onkeypress = function (input) {
    if (input.key == "Enter" && clicked == true) {
        EnterMessage("You", Textbox.value)
        Textbox.value = null;
    }
}

function ChatLoop() {
    setTimeout(
        function () {
            for (var i = 0; i < Random(1, 3); i++) {
                setTimeout(
                    function () {
                        var bot = bots[Random(1, Object.keys(bots).length)];
                        var message = bot.messages[Random(1, Object.keys(bot.messages).length)];
                        if ("Image" in message) {
                            botimage = message.Image;
                        }
                        var typingtime = Random(2, 5)
                        AddToTyping(bot.name);
                        setTimeout(function () {
                            RemoveFromTyping(bot.name)
                            EnterMessage(bot.name, message.Text)
                        },
                            typingtime * 1000
                        )
                    },
                    Random(8, 16) * 1000
                );
            }
            ChatLoop()
        },
        Random(5, 20) * 1000
    )
}

ChatLoop()