function validateForm() {
  // validating form inputs
  //shortcut to form
  let form = document.frmApp;

  // shortcut to message div
  let divMessageName = document.getElementById("divMessageName");

  // name user entered
  // trim method removes any spaces at the beginning or end of what user enters
  let name = form.txtName.value.trim();

  //Get info from flightSituation to check validation
  let situtation = form.flightSituation.value.trim();

  //Gets marsReason from application and validates it
  let reasonToBecomePilot = form.marsReason.value.trim();

  let trainingMessage = document.getElementById("trainingMessage");
  let yesOption = document.getElementById("trainingYes");

  // keep track of whether or not form elements pass validation
  let isValid = true;

  //if first and last name combined are less than 5 characters then user does not pass validation
  if (name.length < 5) {
    divMessageName.innerHTML =
      "Please enter a valid name of at least 5 characters.";
    isValid = false;
  }
  // If situation is less than 1000 characters than a div message shows that there are not enough characters
  if (situtation.length < 1000) {
    divMessageSituation.innerHTML = "Not sufficient characters";
    isValid = false;
  }
  // If reasonToBecomePilot is less than 500 characters than a div message shows that there are not enough characters
  if (reasonToBecomePilot.length < 500) {
    divMessageReason.innerHTML = "Not sufficient characters";
    isValid = false;
  }
  if (!yesOption.checked) {
    trainingMessage.textContent =
      "You must agree to complete six months of mission training to submit.";
    isValid = false;
  }

  // If this is true, form passed valition otherwise users should be given message that input did not pass validation
  return isValid;
}

//Gets the yes and no option
let yesOption = document.getElementById("trainingYes");
let noOption = document.getElementById("trainingNo");

//Shortcut to training message
let trainingMessage = document.getElementById("trainingMessage");

//Shortcut for submit button
let submitButton = document.getElementById("submitButton");
// Function where if user selects no in the training question they cannot submit application
function updateTrainingChoice() {
  // makes constant for choseNo to check if no option was selected
  let choseNo = noOption.checked;
  //Message that will display
  trainingMessage.textContent = choseNo
    ? "If you select No, your application cannot be submitted."
    : "";
  //Button is disabled
  submitButton.disabled = choseNo;
}
//uses a event listener when choice is selected
yesOption.addEventListener("change", updateTrainingChoice);
noOption.addEventListener("change", updateTrainingChoice);
