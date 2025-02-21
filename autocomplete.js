let availablekeywords = [
    'Luxor grand tour',
    'Aswan adventure',
    'Best of the Red sea',
    'timeless Adventure to the pyramids',
    '7 days in paradise',
    'Cairo Highlights: Ancient Wonders & Modern Vibes',
    'Alexandria getaway',
    'A Journey Through Ancient Egypt',

];
const resultbox = document.querySelector(".result-box")
const inputbox = document.getElementById("input-box");
inputbox.onkeyup = function() {
    let result = [] ; 
    let input = inputbox.Value;
    if (input.length) {
        result = availablekeywords.filter((keyword) => {
            keyword.tolowercase().includes(input.tolowercase());
        });
      console.log(result);
    }
    display(result);

    if (!result.length)
    {
        resultbox.innerHTML = '';
    }
}
function display(result) {
    const content = result.map((list) => {
      return "<li>" + list + "</li>";
    });
    resultbox.innerHTML = "<ul>" + content + "</ul>" 
}
function selectInput(list) {
    inputbox.value = list.innerHTML;
    resultbox.innerHTML = '';                  
}