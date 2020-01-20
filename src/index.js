require('./style.css');
{

  const init = () => {
    toggleBooks();
    toggleHumo();
    toggleGadgets();
  };

  // const checkWidth = () => {
  // window.addEventListener('resize', function() {
  // const $screenWidth = screen.width;
  // const $books = document.querySelector('.toggle');
  //if (this < 660) {
  //   $books.style.display = 'none'; //  } // });
  //};

  const toggleBooks = () => {
    const $dropOne = document.getElementById('dropOne');
    const $books = document.querySelector('.toggle');
    $dropOne.addEventListener('change', function() {
      if (this.checked) {
        $books.style.display = 'inline';
      } else {
        $books.style.display = 'none';
      }
    });
  };

  const toggleHumo = () => {
    const $dropTwo = document.querySelector('.dropdown__2');
    const $humo = document.querySelector('.toggleTwo');
    $dropTwo.addEventListener('change', function() {
      if (this.checked) {
        $humo.style.display = 'inline';
      } else {
        $humo.style.display = 'none';
      }
    });
  };

  const toggleGadgets = () => {
    const $dropThree = document.querySelector('.dropdown__3');
    const $gadgets = document.querySelector('.toggleThree');
    $dropThree.addEventListener('change', function() {
      if (this.checked) {
        $gadgets.style.display = 'inline';
      } else {
        $gadgets.style.display = 'none';
      }
    });
  };



  init();
}
