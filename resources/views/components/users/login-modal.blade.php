<body  class="total-number-variant date-picker">
    <div class="wrapper">
    <!-- Login -->
      <div class="offcanvas offcanvas-bottom offcanvas-login" id="canvasLogin">
        <div class="wg-login wg-popup fw-6">
          <button
            class="btn-close-login"
            type="button"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          >
            <i class="icon-close1"></i>
          </button>
          <h4 class="title">
            <span class="login">Login</span>
            <span class="register">Register</span>
          </h4>
          <fieldset class="input-text input-name">
            <label class="text-body-3 fw-4" for="name-login"
              >Username or email address<span>*</span></label
            >
            <input
              class="text-body-3"
              type="text"
              name="name-login"
              id="name-login"
              value="TonyNguyen"
            />
          </fieldset>
          <fieldset class="input-text input-pass">
            <label class="text-body-3 fw-4" for="pass-login"
              >Password<span>*</span></label
            >
            <input
              class="text-body-3"
              type="password"
              name="pass-login"
              id="pass-login"
            />
            <div class="icon">
              <svg
                width="20"
                height="21"
                viewBox="0 0 20 21"
                fill="none"
                xmlns="../../../www.w3.org/2000/svg.html"
              >
                <path
                  d="M12.1073 8.3916L7.89063 12.6083C7.34896 12.0666 7.01562 11.3249 7.01562 10.4999C7.01562 8.84993 8.34896 7.5166 9.99896 7.5166C10.824 7.5166 11.5656 7.84994 12.1073 8.3916Z"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M14.8518 5.3084C13.3935 4.2084 11.7268 3.6084 10.0018 3.6084C7.06016 3.6084 4.31849 5.34173 2.41016 8.34173C1.66016 9.51673 1.66016 11.4917 2.41016 12.6667C3.06849 13.7001 3.83516 14.5917 4.66849 15.3084"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M7.01562 16.7751C7.96563 17.1751 8.97396 17.3917 9.99896 17.3917C12.9406 17.3917 15.6823 15.6584 17.5906 12.6584C18.3406 11.4834 18.3406 9.5084 17.5906 8.3334C17.3156 7.90006 17.0156 7.49173 16.7073 7.1084"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M12.9242 11.083C12.7076 12.258 11.7492 13.2163 10.5742 13.433"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M7.89297 12.6084L1.66797 18.8334"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18.3344 2.16699L12.1094 8.39199"
                  stroke="#64666C"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </fieldset>
          <div class="remember-fogotpassword">
            <div class="remember check-box">
              <input type="checkbox" name="remember" id="remember" />
              <label class="text-body-3 fw-4" for="remember">Remember me</label>
            </div>
            <a href="#" class="fw-4 text-body-3">Fogot password?</a>
          </div>
          <div class="btn-login btn-popup">
            <a href="#" class="tf-btn color-primary text-body-3">Login</a>
          </div>
          <div class="text text-body-3 fw-4">
            Not registered yet?
            <a data-bs-toggle="offcanvas" data-bs-target="#canvasRegister" class="fw-6"
              >Sign Up</a
            >
          </div>
          <div class="line">
            <div class="line-1"></div>
            <p class="text-body-3">or sign up with</p>
            <div class="line-2"></div>
          </div>
          <ul class="social style-2">
            <li class="item">
              <a href="#">
                <div class="icon">
                  <img
                    src="image/icon/logo-fb.png"
                    data-src="image/icon/logo-fb.png"
                    alt=""
                  />
                </div>
                <div class="title-social text-body-3">Facebook</div>
              </a>
            </li>
            <li class="item">
              <a href="#">
                <div class="icon">
                  <img
                    src="image/icon/logo-gg.png"
                    data-src="image/icon/logo-gg.png"
                    alt=""
                  />
                </div>
                <div class="title-social text-body-3">Google</div>
              </a>
            </li>
            <li class="item">
              <a href="#">
                <div class="icon">
                  <img
                    src="image/icon/logo-tw.png"
                    data-src="image/icon/logo-tw.png"
                    alt=""
                  />
                </div>
                <div class="title-social text-body-3">Twitter</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.login -->
    </div>
</body>