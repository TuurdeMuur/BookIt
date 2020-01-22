{


  const handleInputQuantity = e => {
    const $quantity = e.currentTarget;
    const $prijs = $quantity.parentElement.querySelector('.cart-prijs');
    const itemPrice = parseFloat($prijs.textContent).toFixed(2);
    console.log($prijs.textContent);
    const itemTotal = parseFloat($quantity.value * itemPrice).toFixed(2);

    // bereken het totaal van het product opnieuw (eenheid x aantal)
    $quantity.parentElement.parentElement.querySelector('.cart-prijs__totaal').textContent = `${itemTotal} EUR`;

    // bereken het subtotaal van alle productne opnieuw
    let totalPrice = 0;
    document.querySelectorAll('.cart-prijs__totaal').forEach($total => {
      const subtotal = parseFloat($total.textContent);
      if (!isNaN(subtotal)) {
        totalPrice += subtotal;
      }
    });
    document.querySelector('.cart__totaal--totaal').innerHTML = `<span>totale prijs:</span> ${parseFloat(totalPrice).toFixed(2)} EUR`;

    // TODO: aantal items in chart updaten: gelijkaardig aan totale prijs berekenen
    // loopen over alle quantity velden en de som maken
  };

  const removeButtons = submit => {
    if (submit) {
      submit.style.display = 'none';
    }
  };

  const init = () => {

    // alle tekstvakken met class quantity selecteren en luisteren naar het input event
    const quantityFields = document.querySelectorAll('.hoeveelheid');
    quantityFields.forEach($quantity => $quantity.addEventListener('input', handleInputQuantity));


    const $submit = document.querySelector('.cart__totaal--update');
    removeButtons($submit);
  };
  //document.querySelector('.filter__filter').style.display = "none";

  init();
}
