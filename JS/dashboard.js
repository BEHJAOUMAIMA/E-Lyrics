// dynamic Form
const addMoreBtn = document.querySelector('#addMore')
const anotherDiv = document.querySelector('.another-div');
const  modal = document.querySelector('.modal-body');


addMoreBtn.addEventListener('click', (e)=>{
    anotherDiv.append(modal.cloneNode(true));
})

// validation form
function addNew() {
    document.getElementById("saveBtn").style.display = "block";
    document.getElementById("addMore").style.display = "block";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "none";
    document.getElementById("deleteBtn").style.display = "none";
    document.getElementById("form").reset();
}
function edit(id){
    document.getElementById('hideId').value = id;
    document.getElementById("saveBtn").style.display = "none";
    document.getElementById("addMore").style.display = "none";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "block";
    document.getElementById("deleteBtn").style.display = "none";
    document.getElementById('songTitle').value = document.getElementById(id).getAttribute("title");
    document.getElementById('artist').value = document.getElementById(id).getAttribute("artist");
    document.getElementById('album').value = document.getElementById(id).getAttribute("album");
    document.getElementById('year').value = document.getElementById(id).getAttribute("year");
    document.getElementById('lyrics').value = document.getElementById(id).getAttribute("lyrics");
}

function deletebtn(id){
    document.getElementById('hideId').value = id;
    document.getElementById("saveBtn").style.display = "none";
    document.getElementById("addMore").style.display = "none";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "none";
    document.getElementById("deleteBtn").style.display = "block";
    document.getElementById('songTitle').value = document.getElementById(id).getAttribute("title");
    document.getElementById('artist').value = document.getElementById(id).getAttribute("artist");
    document.getElementById('album').value = document.getElementById(id).getAttribute("album");
    document.getElementById('year').value = document.getElementById(id).getAttribute("year");
    document.getElementById('lyrics').value = document.getElementById(id).getAttribute("lyrics");
}