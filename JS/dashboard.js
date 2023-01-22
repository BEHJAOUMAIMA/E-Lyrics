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
    document.getElementById("saveBtn").style.display = "none";
    document.getElementById("addMore").style.display = "none";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("updateBtn").style.display = "block";
    document.getElementById("deleteBtn").style.display = "none";
}