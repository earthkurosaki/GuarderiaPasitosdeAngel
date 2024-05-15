
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="./assets/img/user.png" />
    
    <link rel="stylesheet" href="../css/styles.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap");
      
/* CSS ADMIN */
/*Sección de botones principales*/
.detail {
  justify-content: center;
  background-color: #ffffff;
  border: 2.5px solid #f9f9f9;
  text-align: center;
  padding: 3.4rem 0;
  margin: 2rem 0;
  flex-direction: row;
}

/*.item img {
  width: 150px;
  height: 150px;
  margin-left: 53px;
}*/

.n img {
  width: 150px;
  height: 150px;
  margin-left: 48px;
  margin-top:
}

.p img {
  width: 150px;
  height: 150px;
  margin-left: 55px;
}

.e img {
  width: 150px;
  height: 150px;
  margin-left: 55px;
}
.item {
  background-color: #f3eeee;
  text-align: center;
  box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -moz-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  margin: 20px 20px 20px 20px;
  padding: 3.4rem 0;
  border-radius: 8px;
  transition: var(--transition);
  width: 250px;
  display: inline-block;
}

.item:hover {
  -webkit-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  -moz-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  transform: translateY(-15px);
}

.n {
  background-color: #f3eeee;
  text-align: center;
  box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -moz-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  margin: 20px 20px 20px 20px;
  padding: 3.4rem 0;
  border-radius: 8px;
  transition: var(--transition);
  width: 250px;
  display: inline-block;
}

.n:hover {
  -webkit-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  -moz-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  transform: translateY(-15px);
}

.p{
  background-color: #f3eeee;
  text-align: center;
  box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -moz-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  margin: 20px 20px 20px 20px;
  padding: 3.4rem 0;
  border-radius: 8px;
  transition: var(--transition);
  width: 250px;
  display: inline-block;
}

.p:hover {
  -webkit-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  -moz-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  transform: translateY(-15px);
}

.e{
  background-color: #f3eeee;
  text-align: center;
  box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  -moz-box-shadow: 0 1px 2px 0 rgba(90, 91, 95, 0.1);
  margin: 20px 20px 20px 20px;
  padding: 3.4rem 0;
  border-radius: 8px;
  transition: var(--transition);
  width: 250px;
  display: inline-block;
}

.e:hover {
  -webkit-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  -moz-box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  box-shadow: 0 21px 19px -2px rgba(217, 217, 217, 1);
  transform: translateY(-15px);
}
.button .form_btn {
  background: #1696e4;
  color: #fff;
  text-transform: capitalize;
  font-size: 20px;
  cursor: pointer;
  width: 150px;
  padding: 7px 8px;
  font-size: 17px;
  margin: 2px 0;
  background: #1696e4;
  border-radius: 5px;
  font-family: "Poetsen One", sans-serif;
}

.button .form_btn:hover {
  background: #fff;
  color: #1696e4;
}

.item .button span {
  display: block;
}
.item .button span:first-child {
  font-size: 2.6rem;
  letter-spacing: 2px;
  color: #04896f;
}
.item .button span:last-child {
  font-size: 0.85rem;
  letter-spacing: 1;
  font-weight: 500;
}

@media screen and (min-width: 1200px) {
  .detail .row {
    grid-template-columns: repeat(3, 1fr);
  }
}
    </style>
    <title>Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <header>

    <section class="detail">


    <div class="container">
      
    <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/login/login.php">Cerrar Sesión</a>
            </button>
    </div>
    </section>
      <section class="detail">
        <div class="container">
          <div class="row">
            <div  class="n">
              <img src="./assets/imgs/children.png" />

              <div class="button">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/ninos/ninos.php"
                  ><input
                    type="submit"
                    value="Niños"
                    name="form"
                    class="form_btn"
                /></a>
                <span class="text"></span>
              </div>
            </div>

            <div  class="p">
              <img src="./assets/imgs/parents.png" />

              <div class="button">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/padres/prueba.php"
                  ><input
                    type="submit"
                    value="Padres"
                    name="form"
                    class="form_btn"
                /></a>
                <span class="text"></span>
              </div>
            </div>

            <div  class="e">
              <img src="./assets/imgs/multitasking.png" />

              <div class="button">
                <a href="http://localhost/GuarderiaPasitosdeAngel/frontend/pages/forms/empleados/empleado.php"
                  ><input
                    type="submit"
                    value="Empleados"
                    name="form"
                    class="form_btn"
                /></a>
                <span class="text"></span>
              </div>
            </div>

           
            </div>
          </div>
        </div>
      </section>

      <section class="detail">
        <div class="row">
          <div class="item">
            <img src="./assets/imgs/automobile-with-wrench.png" />

            <div class="button">
              <a href=""
                ><input
                  type="submit"
                  value="En construcción"
                  name="form"
                  class="form_btn"
              /></a>
              <span class="text"></span>
            </div>
          </div>

          <div class="item">
            <img src="./assets/imgs/automobile-with-wrench.png" />

            <div class="button">
              <a href=""
                ><input
                  type="submit"
                  value="En construcción"
                  name="form"
                  class="form_btn"
              /></a>
              <span class="text"></span>
            </div>
          </div>

          <div class="item">
            <img src="./assets/imgs/automobile-with-wrench.png" />

            <div class="button">
              <a href=""
                ><input
                  type="submit"
                  value="En construcción"
                  name="form"
                  class="form_btn"
              /></a>
              <span class="text"></span>
            </div>
          </div>

          <div class="item">
            <img src="./assets/imgs/automobile-with-wrench.png" />

            <div class="button">
              <a href=""
                ><input
                  type="submit"
                  value="En construcción"
                  name="form"
                  class="form_btn"
              /></a>
              <span class="text"></span>
            </div>
          </div>
        </div>
      </section>
    </header>
  </body>
</html>
