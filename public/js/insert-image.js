/* FOR IMAGE */
function loadImageFileAsURL() {
    var filesSelected = document.getElementById("inputFileToLoad").files;
    if (filesSelected.length > 0) {
        var fileToLoad = filesSelected[0];

        if (fileToLoad.type.match("image.*")) {
            var customTextarea = document.getElementById("custom-textarea");
            var fileReader = new FileReader();
            fileReader.onload = function (fileLoadedEvent) {
                var imageLoaded = document.createElement("img");
                imageLoaded.src = fileLoadedEvent.target.result;
                customTextarea.appendChild(imageLoaded);
            };
            fileReader.readAsDataURL(fileToLoad);
        }
    }
}
function loadImageFileFromURL() {
    var src = document.getElementById('inputLinkToLoad').value,
        img = document.createElement('img');
    var customTextarea = document.getElementById("custom-textarea");
    img.src = src;
    customTextarea.appendChild(img);
}

/* FOR LINK */
function saveSelection() {
    if (window.getSelection) {
        sel = window.getSelection();
        if (sel.getRangeAt && sel.rangeCount) {
            var ranges = [];
            for (var i = 0, len = sel.rangeCount; i < len; ++i) {
                ranges.push(sel.getRangeAt(i));
            }
            return ranges;
        }
    } else if (document.selection && document.selection.createRange) {
        return document.selection.createRange();
    }
    return null;
}

function restoreSelection(savedSel) {
    if (savedSel) {
        if (window.getSelection) {
            sel = window.getSelection();
            sel.removeAllRanges();
            for (var i = 0, len = savedSel.length; i < len; ++i) {
                sel.addRange(savedSel[i]);
            }
        } else if (document.selection && savedSel.select) {
            savedSel.select();
        }
    }
}
function getText(){
    var savedSel = saveSelection();
    document.getElementById("text1").value = savedSel;
}
function createLink() {
    var text1 = document.getElementById("text1").value;
    var url = document.getElementById("url").value;

    var a = document.createElement('a');
    var linkText = document.createTextNode(text1);
    a.appendChild(linkText);
    a.title = text1;
    a.href = url;
    
    var customTextarea = document.getElementById("custom-textarea");
    customTextarea.appendChild(a);
}