function storeName() {
    const nameInput = document.getElementById('name');
    const name = nameInput.value;
    localStorage.setItem('name', name);
    console.log("Name has been entered" + name)
};