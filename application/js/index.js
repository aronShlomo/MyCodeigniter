function changeNum() {
    var child1 = document.getElementById('child_information-1');
    var child2 = document.getElementById('child_information-2');
    var selected = document.getElementById('num_children');
    var selectedValue = selected.options[selected.selectedIndex].value;
    if (selectedValue == 0) {
        child1.style.display = 'none';
        child2.style.display = 'none';
    }
    if (selectedValue == 1) {
        child1.style.display = 'block';
        child2.style.display = 'none';
    }
    if (selectedValue == 2) {
        child1.style.display = 'block';
        child2.style.display = 'block';
    }



}