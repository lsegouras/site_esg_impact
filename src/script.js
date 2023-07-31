//script carousel

document.addEventListener("DOMContentLoaded", function(event){
    var carouselContainers = document.querySelectorAll(".carousel-container")
    var currentSlide = 0
    var slideInterval = setInterval(nextSlide, 2700)

function nextSlide(){
    carouselContainers[currentSlide].classList.remove("active")
    currentSlide = (currentSlide + 1) % carouselContainers.length
    carouselContainers[currentSlide].classList.add("active")
}

})

// //script serviços

// const arrows = document.getElementsByClassName("img-arrow")

// for (let i = 0; i < arrows.length; i++){
//     arrows[i].addEventListener('click', function(){
//         var service = this.parentNode
//         var serviceText = service.querySelector(".service-text")

//         if(serviceText.style.display === "none"){
//             serviceText.style.display = "block"
//         }else{
//             serviceText.style.display = "none"
//     }
//     })
// }