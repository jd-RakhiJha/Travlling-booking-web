
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


const slides = document.querySelectorAll(".slide")
var counter =0;

slides.forEach(
   (slide, index) => {
    slide.style.left = '${index *100}%'
   }
)

const goPrev  = () =>{
  counter--
  slideImage()
}

const goNext = () =>{
  counter++
  slideImage()
}


const slideImage = () => {
  slides.forEach(
   (slide)=> {
    slide.style.transform = 'translatex(-${counter * 100}%)'
   }

  )
}
