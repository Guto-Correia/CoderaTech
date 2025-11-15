$('.carrossel').slick({
  centerMode: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,

  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

// animação da section projetos

const links = document.querySelectorAll('[data-img]');
const img = document.getElementById('img-projeto');

links.forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault();
    const novoSrc = link.dataset.img;

    img.classList.add('fade');

    setTimeout(() => {
      img.src = novoSrc;
      img.classList.remove('fade');
    }, 400); // mesmo tempo da transição
  });
});
