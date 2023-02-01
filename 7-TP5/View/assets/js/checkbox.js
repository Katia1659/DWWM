document.getElementById('selectAll').onclick = function() {
    let checkboxes = document.getElementsByName('ID[]')
    for (let checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
}