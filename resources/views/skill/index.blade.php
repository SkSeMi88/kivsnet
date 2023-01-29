<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Кредитный калькулятор</title>

    <style>

    </style>

     <script>

        // Входные параметры

        // сумма займа
        let summa = 395000;

        // Период в месяцах
        let period = 60;

        // Процентная ставка
        let rate = 0.149;

        // Аннуитетный кредит в больинстве случае по умолчанию
        // Весь период каждый месяц платим одну и ту же сумму

        // Сумма аннуитетного платежа
        let ann = 0;

        // (Изначальная сумма * ежемесячная процентная ставка) / (1-(1/(1+ежемесячная процентная ставка) ^ период кредита))

        // Ежемесячная ствка путем деления процентной ставки на колво месяцев в году 12
        let monthRate   = rate / 12;

        let topPart     = +(summa * monthRate).toFixed(2);
        let bottomPart  = +(1 - (1 / Math.pow((1 + monthRate), period))).toFixed(2);

        console.log(topPart , bottomPart);

        ann = +(topPart / bottomPart).toFixed(2);
        console.log(ann);

        // Дифиренцированный кредит
        // Сумма платежа уменьшается пропрорционально оставшемуся долгу


        let dif = 0;
        let persents = 0;

        // основная ставка в этом месяце
        let remainSumma  = summa;
        // отсвашая ставка сумма платежа

        // основной долг
        let mainDebt    = +(summa/period).toFixed(2);

        for (let i =0; i< period; i++)
        {
            console.log("Основной долг:" + remainSumma);

            // Процент на текущий период
            persents = +(remainSumma * monthRate).toFixed(2);
            console.log("Проценты:" + persents);

            remainSumma -= +(mainDebt).toFixed(2);
            remainSumma = +(remainSumma).toFixed(2);
            dif = persents + mainDebt;

            console.log("Основной долг: " + mainDebt);
            console.log("Ежемесячный платёж: " + dif);
        }

        function calc() {


            // Входные параметры

            // сумма займа
            let summa = document.querySelector("#summa").value;

            // 1ый взнос
            let vznos = document.querySelector("#vznos").value;

            // Период в месяцах
            let period = document.querySelector("#period").value;

            summa      -= vznos;

            // Процентная ставка
            let rate = document.querySelector("#rate").value;

            // Аннуитетный кредит в больинстве случае по умолчанию
            // Весь период каждый месяц платим одну и ту же сумму

            // Сумма аннуитетного платежа
            let ann = 0;

            // (Изначальная сумма * ежемесячная процентная ставка) / (1-(1/(1+ежемесячная процентная ставка) ^ период кредита))

            // Ежемесячная ствка путем деления процентной ставки на колво месяцев в году 12
            let monthRate   = rate / 12;

            let topPart     = +(summa * monthRate).toFixed(2);
            let bottomPart  = +(1 - (1 / Math.pow((1 + monthRate), period))).toFixed(2);

            console.log(topPart , bottomPart);

            ann = +(topPart / bottomPart).toFixed(2);
            console.log(ann);

            document.querySelector("#result").innerHTML = "Аннуитетный платёж: " + ann;

            // Дифиренцированный кредит
            // Сумма платежа уменьшается пропрорционально оставшемуся долгу


            let dif = 0;
            let persents = 0;

            // основная ставка в этом месяце
            let remainSumma  = summa;
            // отсвашая ставка сумма платежа

            // основной долг
            let mainDebt    = +(summa/period).toFixed(2);

            let table       = '<table>';
            table          += '<caption>Дифференцированный платеж</caption>';
            table          += '<tr><th>Долг на начало периода </th><th>Основной долг</th><th>Проценты</th><th>Ежемесячный платеж</th></tr>';

            let stroka      = "";
            for (let i =0; i< period; i++)
            {
                // stroka      = '<tr><td>${remainSumma}</td><td>${mainDebt}</td>';
                stroka      = '<tr><td>'+ remainSumma +'</td><td>'+ mainDebt +'</td>';
                // console.log("Основной долг:" + remainSumma);

                // Процент на текущий период
                persents = +(remainSumma * monthRate).toFixed(2);
                console.log("Проценты:" + persents);
                // stroka          += '<td>${persents}</td>';
                stroka          += '<td>' + persents + '</td>';

                remainSumma     -= +(mainDebt).toFixed(2);
                remainSumma     = +(remainSumma).toFixed(2);
                dif             = +(persents + mainDebt).toFixed(2);
                // stroka          += "<td>${dif}</td></tr>";
                stroka          += '<td>' +dif + '</td></tr>';

                console.log("Основной долг: " + mainDebt);
                console.log("Ежемесячный платёж: " + dif);

                table   +=stroka;
            }
            table   +="</table>";
            document.querySelector("#table").innerHTML  = table;
        }

        // document.querySelector("#result").innerHTML = "Аннуитетный платёж: " + ann;

    </script>
</head>

<body>
<div>
    Кредитный калькулятор
</div>

<div>
    Сумма кредита
</div>

<div>
    <input type="text" name="summa" id="summa" value="1000">
</div>

<div>
    Первоначальный взнос
</div>

<div>
    <input type="text" name="vznos" id="vznos" value="0">
</div>

<div>
    Срок кредита
</div>

<div>
    <input type="text" name="period" id="period" value="12">
</div>


<div>
    Процентная ставка
</div>

<div>
    <input type="text" name="rate" id="rate" value="0.229">
</div>


  <div class="div">
    <input type="button" value="Рассчитать" onclick="calc();">
  </div>

<hr>

<div>
    Резльтат
</div>

<div id="result">

</div>

<div id="table">

</div>

</body>

</html>
