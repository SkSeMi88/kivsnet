
/*
    Слушатель на все кнопки со значением Х для очищения соответвующего поля
*/
document.addEventListener('click', e => {
    if (e.target.classList.contains('reset-field'))
    {
        e.target.parentNode
        console.log(e.target.parentNode);
        console.log(document.querySelector("#"+e.target.nextElementSibling.id).value="");

        // alert(`Я выполню задачу ${e.target.text}`);
    }
  })


/*
    Функция копирования значений шататного места работы в фактическое
*/
function testjs(test)
{
    console.log("test.js:");

    document.querySelector("#company_fact").value        = "";
    document.querySelector("#comite_fact").value         = "";
    document.querySelector("#management_fact").value     = "";
    document.querySelector("#department_fact").value     = "";

    if(document.querySelector("#fact_flag").checked) {

        document.querySelector("#company_fact").value        = (document.querySelector("#company").value);
        document.querySelector("#comite_fact").value         = (document.querySelector("#comite").value);
        document.querySelector("#management_fact").value     = (document.querySelector("#management").value);
        document.querySelector("#department_fact").value     = (document.querySelector("#department").value);

    }

    console.log(document.querySelector("#fact_flag").checked==true);

    console.log(document.querySelector("#company").value);
    console.log(document.querySelector("#comite").value);
    console.log(document.querySelector("#management").value);
    console.log(document.querySelector("#department").value);

    console.log("Фактическое расположение нового пользователя:");
    console.log(document.querySelector("#company_fact").value);
    console.log(document.querySelector("#comite_fact").value);
    console.log(document.querySelector("#management_fact").value);
    console.log(document.querySelector("#department_fact").value);
    // if  (document.querySelector("#fact_flag").value=="1")
    // document.querySelector("#company_fact").value= document.querySelector("#company").value;
}



