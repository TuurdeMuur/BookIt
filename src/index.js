require('./style.css');
require('./scripts/longread.js');
require('./scripts/validate.js');
require('./scripts/update.js');
{

  const init = () => {
    toggleBooks();
    toggleHumo();
    toggleGadgets();
  };


  const toggleBooks = () => {
    const $dropOne = document.getElementById('dropOne');
    const $books = document.querySelector('.toggle');
    if ($dropOne && screen.width < 660) {
      $books.style.display = 'none';
      $dropOne.addEventListener('change', function() {
        if (this.checked) {
          $books.style.display = 'inline';
        } else {
          $books.style.display = 'none';
        }
      });

    }
  };

  const toggleHumo = () => {
    const $dropTwo = document.querySelector('.dropdown__2');
    const $humo = document.querySelector('.toggleTwo');
    if ($dropTwo && screen.width < 660) {
      $humo.style.display = 'none';
      $dropTwo.addEventListener('change', function() {
        if (this.checked) {
          $humo.style.display = 'inline';
        } else {
          $humo.style.display = 'none';
        }
      });
    }
  };

  const toggleGadgets = () => {
    const $dropThree = document.querySelector('.dropdown__3');
    const $gadgets = document.querySelector('.toggleThree');
    if ($dropThree && screen.width < 660) {
      $gadgets.style.display = 'none';
      $dropThree.addEventListener('change', function() {
        if (this.checked) {
          $gadgets.style.display = 'inline';
        } else {
          $gadgets.style.display = 'none';
        }
      });
    }
  };



  init();
}
