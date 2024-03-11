const scanElement = document.querySelector("#scanElement");
const containerEl = document.getElementById("container");

const onClickScan = (event) => {
  scanElement.value = event.target.dataset.text;
  const height = containerEl.scrollHeight;
  //
  containerEl.scrollTo({
    top: height,
    behavior: "smooth",
  });
};
