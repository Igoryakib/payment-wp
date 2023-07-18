<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="pagePayment">
      <div class="container">
        <header class="headerCart">
          <ul class="navList">
            <li class="active">
              <div>1</div>
              <p>Корзина</p>
            </li>
            <li class="active">
              <div>2</div>
              <p>Оплата</p>
            </li>
            <li>
              <div>3</div>
              <p>Создание аккаунта</p>
            </li>
            <li>
              <div>4</div>
              <p>Заказ выполнен</p>
            </li>
          </ul>

          <button type="button" class="buttonNav">
            <svg
              width="16"
              height="17"
              viewBox="0 0 16 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fillRule="evenodd"
                clipRule="evenodd"
                d="M9.4714 5.69526C9.73175 5.95561 9.73175 6.37772 9.4714 6.63807L7.60948 8.5L9.4714 10.3619C9.73175 10.6223 9.73175 11.0444 9.4714 11.3047C9.21106 11.5651 8.78895 11.5651 8.5286 11.3047L6.19526 8.9714C5.93491 8.71106 5.93491 8.28895 6.19526 8.0286L8.5286 5.69526C8.78895 5.43491 9.21106 5.43491 9.4714 5.69526Z"
                fill="#FCFCFD"
              />
            </svg>
            <p>На главную</p>
          </button>

          <div class="lightbox"></div>
        </header>
        <main class="bodyPayment">
          <section class="formSectionPayment">
            <ul class="formList">
              <li>
                <button class="active" id="cardButton">Кредитная карта</button>
              </li>
              <li>
                <button class="" id="paypalButton">PayPal</button>
              </li>
              <li>
                <button class="" id="appleButton">Apple Pay</button>
              </li>
            </ul>
            <div id="card">
              <div class="title" >
                <p>Кредитная карта</p>
                <div>
                  <img src="<?php bloginfo('template_directory'); ?>./assets/images/Visa.png" alt="visa" />
                  <img src="<?php bloginfo('template_directory'); ?>./assets/images/master.png" alt="mastercard" />
                </div>
              </div>
              <form class="form" id="form">
                <label htmlFor="card-number">Номер карты</label>
                <input
                  type="text"
                  id="card-number"
                  name="card-number"
                  placeholder="3456 6789 4567 2345"
                  onchange="handleInputChangeCard"
                  required
                />
                <label htmlFor="card-holder">Владелец карты</label>
                <input
                  type="text"
                  id="card-holder"
                  name="card-holder"
                  placeholder="Деймон Торранс"
                  onchange="handleInputChangeOwner"
                  required
                />
                <div class="wrapperBottom">
                  <div>
                    <label htmlFor="expiry-date">Срок действия карты</label>
                    <input
                      type="text"
                      id="expiry-date"
                      name="expiry-date"
                      placeholder="ММ/ГГ"
                      onchange="handleInputChangeDate"
                      required
                    />
                  </div>
                  <div>
                    <label htmlFor="cvc">СVC</label>
                    <input
                      type="text"
                      id="cvc"
                      name="cvc"
                      placeholder="***"
                      onchange="handleInputChangeCvc"
                      required
                    />
                  </div>
                </div>
              </form>
            </div>
            <div class="paypalWrapper hidden" id="paypal">
              <div class="titlePaypal">
                <p>PayPal</p>
                <img src="<?php bloginfo('template_directory'); ?>./assets/images/Paypal.png" alt="paypal" />
              </div>
              <div class="paypal">
                <div>
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                      stroke="#AEACA9"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                    <path
                      d="M12 8V13"
                      stroke="#AEACA9"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                    <path
                      d="M11.9941 16H12.0031"
                      stroke="#AEACA9"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                </div>
                <p>
                  Нажмите кнопку PayPal ниже, чтобы войти в PayPal и подтвердить
                  платеж.
                </p>
              </div>
              <button class="payPalButton">
                оплатить с помощью
                <img src="<?php bloginfo('template_directory'); ?>./assets/images/payPal2.png" alt="paypal" />
              </button>
            </div>
            <div class="paypalWrapper hidden" id="apple">
              <div class="titlePaypal">
                <p>Apple Pay</p>
                <img src="<?php bloginfo('template_directory'); ?>./assets/images/applePay.png" alt="applepay" />
              </div>
              <div class="paypal">
                <div>
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                      stroke="#AEACA9"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                    <path
                      d="M12 8V13"
                      stroke="#AEACA9"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                    <path
                      d="M11.9941 16H12.0031"
                      stroke="#AEACA9"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                </div>
                <p>
                  Нажмите "Apple Pay" и подтвердите покупку с помощью Touch/Face
                  ID на вашем устройстве.
                </p>
              </div>
              <button class="payPalButton payPalButton__white">
                оплатить с помощью
                <img src="<?php bloginfo('template_directory'); ?>./assets/images/applePay2.png" alt="applepay" />
              </button>
            </div>
          </section>
          <section class="formSection">
            <p class="formSectionTitle">Ваш заказ</p>
            <ul class="orderList">
              <li class="orderListItem">
                <div class="wrapperItem">
                  <div class="orderImage">
                    <img src="<?php bloginfo('template_directory'); ?>./assets/images/item1.png" alt="Item1" />
                  </div>
                  <div class="wrapperMedium">
                    <p class="part">Часть 1:</p>
                    <h2>ЗАКРЫТИЕ СДЕЛОК</h2>
                  </div>
                </div>
                <div class="wrapperBottomItem">
                  <p class="saleItem">$50.00</p>
                  <p class="priceItem">$40.00</p>
                </div>
              </li>
              <li class="orderListItem">
                <div class="wrapperItem">
                  <div class="orderImage">
                    <img src="<?php bloginfo('template_directory'); ?>./assets/images/item2.png" alt="Item1" />
                  </div>
                  <div class="wrapperMedium">
                    <p class="part">Часть 2:</p>
                    <h2>ИСТОРИЯ ПРОДАЖ</h2>
                  </div>
                </div>
                <div class="wrapperBottomItem">
                  <p class="saleItem">$50.00</p>
                  <p class="priceItem">$40.00</p>
                </div>
              </li>
              <li class="orderListItem">
                <div class="wrapperItem">
                  <div class="orderImage">
                    <img src="<?php bloginfo('template_directory'); ?>./assets/images/item3.png" alt="Item1" />
                  </div>
                  <div class="wrapperMedium">
                    <p class="part">Часть 3:</p>
                    <h2>КАК НАХОДИТЬ КЛИЕНТОВ, СТАРАЯ ШКОЛА</h2>
                  </div>
                </div>
                <div class="wrapperBottomItem">
                  <p class="saleItem">$50.00</p>
                  <p class="priceItem">$40.00</p>
                </div>
              </li>
            </ul>

            <div class="wrapper">
              <p>Всего</p>
              <div>
                <p class="sale">$150.00</p>
                <p class="total">$120.00</p>
              </div>
            </div>
            <button class="orderNav disabled" disabled="true" id="payButton">
              оплатить курс
            </button>
          </section>
        </main>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
