$("#datepickerFrom").datepicker({
  format: "yyyy",
  viewMode: "years",
  minViewMode: "years",
  autoclose: true //to close picker once year is selected
});
$("#datepickerTo").datepicker({
  format: "yyyy",
  viewMode: "years",
  minViewMode: "years",
  autoclose: true //to close picker once year is selected
});

function readUrl(input) {
  // console.log(input.files);
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}