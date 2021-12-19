// Swapper part

document.querySelector('.theme-toggle-button').addEventListener('click', () => {
  document.body.classList.toggle('light')
})


// Wrapper part

const hiddenItems = document.getElementsByClassName("hidden");

for (let x = 0; x < hiddenItems.length; x++) {
  const hi = hiddenItems[x];
  hi.style.visibility = "hidden";

  const parent = hi.parentNode;

  const button = document.createElement("span");
  button.className = "material-icons";
  button.id = "eye";
  button.textContent = "visibility_off";
  button.title = "Montrer la réponse.";
  button.onclick = () => {
    hi.style.visibility = hi.style.visibility === "hidden" ? "" : "hidden";
    button.textContent =
      hi.style.visibility === "hidden" ? "visibility_off" : "visibility";
  };

  const wrapper = document.createElement("section");
  wrapper.className = "wrapper-hidden";
  parent.replaceChild(wrapper, hi);
  wrapper.appendChild(hi);

  wrapper.appendChild(button);
}

console.log(hiddenItems);
