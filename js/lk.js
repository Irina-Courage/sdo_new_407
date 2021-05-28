let edit_buttons = document.querySelectorAll(".edit-btn");
let save_buttons = document.querySelectorAll(".save-btn");
let cancel_buttons = document.querySelectorAll(".cancel-btn");

for (let i = 0; i < edit_buttons.length; i++) {
    let inputValue = edit_buttons[i].previousElementSibling.innerText;
    edit_buttons[i].addEventListener("click", () => {
        edit_buttons[i].previousElementSibling.innerHTML = `<input type="text" value="${inputValue}">`;
        save_buttons[i].hidden = false;
        cancel_buttons[i].hidden = false;
        edit_buttons[i].hidden = true;
    });
    cancel_buttons[i].addEventListener("click", () => {
        edit_buttons[i].previousElementSibling.innerHTML = inputValue;
        save_buttons[i].hidden = true;
        cancel_buttons[i].hidden = true;
        edit_buttons[i].hidden = false;
    })

    save_buttons[i].addEventListener("click", async () => {
        let newInputValue = edit_buttons[i].previousElementSibling.innerText = edit_buttons[i].previousElementSibling.firstElementChild.value;
        inputValue = newInputValue;
        save_buttons[i].hidden = true;
        cancel_buttons[i].hidden = true;
        edit_buttons[i].hidden = false;

        let formData = new FormData();
        formData.append("value", newInputValue);
        formData.append("item", save_buttons[i].dataset.item);

        let response = await fetch('lk_obr.php', {
            method: 'POST',
            body: formData
        });
    });

}
