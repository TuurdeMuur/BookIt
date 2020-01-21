
{

  const init = () => {
    showPacman();
    showStick();
  };

  const showPacman = () => {
    const $pac = document.querySelector('.pacman');
    $pac.addEventListener('click', function() {
      $pac.src = '../assets/gifs/pacman_1.gif';
      $pac.width = '200';
    });
  };

  const showStick = () => {
    const $stick = document.querySelector('.joystick-gif');
    $stick.addEventListener('click', function() {
      $stick.src = '../assets/gifs/joystick.gif';
    });
  };

  init();
}
