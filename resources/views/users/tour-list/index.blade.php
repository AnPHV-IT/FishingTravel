@extends('layouts.app')
@section('title','Ogani | Tour List')

@section('content')
<body class="total-number-variant date-picker">
    <div id="wrapper">

      <!-- Main-content -->
      <div class="main-content">
        {{-- <!-- Wg-map -->
        <div class="wg-map tf-spacing-10">
          <div class="box-map">
            <div id="map" class="map"></div>
          </div>
        </div>
        <!-- /.wg-map --> --}}

        <div class="tf-container tf-spacing-11">
          <div class="row">
            <div class="col-lg-3">
              <div class="wg-sidebar">
                <div class="wg-location wg-sidebar-content">
                  <div class="title text-body-3 fw-6">Location</div>
                  <div class="nice-select border">
                    <span class="current">Locations</span>
                    <ul class="list">
                      <li class="option option-all">Locations</li>
                      <li class="option">Barcelona</li>
                      <li class="option">Fuji, Japan</li>
                      <li class="option">Golden Gate</li>
                      <li class="option">Gyeongju</li>
                      <li class="option">Ha Noi</li>
                      <li class="option">Heidelberg</li>
                      <li class="option">Miami</li>
                      <li class="option">Switzerland</li>
                      <li class="option">Thailand</li>
                      <li class="option">United Kingdom</li>
                    </ul>
                  </div>
                </div>
                <div class="wg-tour-type wg-sidebar-content">
                  <div class="title text-body-3 fw-6">Tour Type</div>
                  <div class="nice-select border" tabindex="0">
                    <span class="current">Select Type</span>
                    <ul class="list style-radio">
                      <li data-value="select-type" class="option">
                        Select Type
                      </li>
                      <li data-value="adventure" class="option">Adventure</li>
                      <li data-value="discovery" class="option">Discovery</li>
                      <li data-value="beach" class="option">Beach</li>
                      <li data-value="wildlife" class="option">Wildlife</li>
                      <li data-value="camping" class="option">Camping</li>
                    </ul>
                  </div>
                </div>
                <div class="wg-date wg-sidebar-content">
                  <div class="title text-body-3 fw-6">Date</div>
                  <fieldset class="flex items-center">
                    <div class="icon">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="../../../www.w3.org/2000/svg.html"
                      >
                        <path
                          d="M16.2222 3.33398H3.77778C2.79594 3.33398 2 4.08018 2 5.00065V16.6673C2 17.5878 2.79594 18.334 3.77778 18.334H16.2222C17.2041 18.334 18 17.5878 18 16.6673V5.00065C18 4.08018 17.2041 3.33398 16.2222 3.33398Z"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M12.834 1.66602V4.99935"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M6.16602 1.66602V4.99935"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M2 8.33398H18"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </div>
                    <input
                      class="text-body-3"
                      type="text"
                      name="date-in"
                      id="datepicker1"
                      tabindex="2"
                      value=""
                      aria-required="true"
                      required=""
                      placeholder="DD/MM/YYYY"
                    />
                  </fieldset>
                </div>
                <div class="form-people wg-sidebar-content">
                  <div class="text-body-3 title fw-6">People</div>
                  <div
                    class="number-people style-default dropdown-toggle"
                    id="Boxsearch"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    data-bs-auto-close="outside"
                    role="button"
                  >
                    <div class="icon">
                      <svg
                        width="21"
                        height="20"
                        viewBox="0 0 21 20"
                        fill="none"
                        xmlns="../../../www.w3.org/2000/svg.html"
                      >
                        <path
                          d="M17.3676 17.5002V15.7355C17.3676 14.7994 16.9958 13.9017 16.3339 13.2398C15.672 12.5779 14.7743 12.2061 13.8382 12.2061H6.77941C5.84335 12.2061 4.94563 12.5779 4.28374 13.2398C3.62185 13.9017 3.25 14.7994 3.25 15.7355V17.5002"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M10.3088 9.55882C12.2581 9.55882 13.8382 7.97865 13.8382 6.02941C13.8382 4.08017 12.2581 2.5 10.3088 2.5C8.35959 2.5 6.77942 4.08017 6.77942 6.02941C6.77942 7.97865 8.35959 9.55882 10.3088 9.55882Z"
                          stroke="#121212"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <div>
                      <span class="text-body-3 adults">0</span>
                      <span class="text-body-3">Adults -</span>
                      <span class="text-body-3 children">0</span>
                      <span class="text-body-3">children</span>
                    </div>
                  </div>
                  <ul class="dropdown-menu" aria-labelledby="Boxsearch">
                    <li class="text-body-3 dropdown-item">
                      <div class="text">Adults <span>(12 Years+)</span></div>
                      <div class="quantity">
                        <span class="btn-quantity minus-btn minus-btn-1"></span>
                        <input
                          type="text"
                          name="number-adults"
                          value="0"
                          id="number-adults"
                          class="number-adults"
                        />
                        <span class="btn-quantity plus-btn plus-btn-1"></span>
                      </div>
                    </li>
                    <li class="text-body-3 dropdown-item">
                      <div class="text">Children <span>(2-12 Years)</span></div>
                      <div class="quantity">
                        <span class="btn-quantity minus-btn minus-btn-2"></span>
                        <input
                          type="text"
                          name="number-children"
                          value="0"
                          id="number-children"
                          class="number-children"
                        />
                        <span class="btn-quantity plus-btn plus-btn-2"></span>
                      </div>
                    </li>
                    <li class="text-body-3 dropdown-item">
                      <div class="text">Infants <span>(0-2 Years)</span></div>
                      <div class="quantity">
                        <span class="btn-quantity minus-btn minus-btn-3"></span>
                        <input
                          type="text"
                          name="number-infants"
                          value="0"
                          id="number-infants"
                          class="number-infants"
                        />
                        <span class="btn-quantity plus-btn plus-btn-3"></span>
                      </div>
                    </li>
                    <li class="text-body-3 dropdown-item">
                      <div class="text">Pets</div>
                      <div class="quantity">
                        <span class="btn-quantity minus-btn minus-btn-4"></span>
                        <input
                          type="text"
                          name="number-Pets"
                          value="0"
                          id="number-pets"
                          class="number-pets"
                        />
                        <span class="btn-quantity plus-btn plus-btn-4"></span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="range-slider wg-sidebar-content">
                  <div class="title text-body-3 fw-6">Price</div>
                  <div id="range-two-val" class="range-two-val"></div>

                  <div class="bottom">
                    <div class="value">
                      <div class="price-min" id="skip-value-lower"></div>
                      <span>-</span>
                      <div class="price-max" id="skip-value-upper"></div>
                    </div>
                  </div>
                </div>
                <div class="wg-amenities wg-sidebar-content pb-16">
                  <div class="title text-body-3 fw-6">Amenities</div>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input
                      type="checkbox"
                      name="checkbox"
                      id="checkbox1"
                      checked
                    />
                    <label class="text-body-3" for="checkbox1"
                      >Air Conditioning</label
                    >
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkbox2" />
                    <label class="text-body-3" for="checkbox2"
                      >Alarm System</label
                    >
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkbox3" />
                    <label class="text-body-3" for="checkbox3"
                      >Central Heating</label
                    >
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input
                      type="checkbox"
                      name="checkbox"
                      id="checkbox4"
                      checked
                    />
                    <label class="text-body-3" for="checkbox4"> Laundry</label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkbox5" />
                    <label class="text-body-3" for="checkbox5">Microwave</label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkbox6" />
                    <label class="text-body-3" for="checkbox6">Outdoor</label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkbox7" />
                    <label class="text-body-3" for="checkbox7"
                      >Refrigerator</label
                    >
                  </fieldset>
                </div>
                <div class="wg-review wg-sidebar-content pb-16">
                  <div class="title text-body-3 fw-6">Review Score</div>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkBox1" />
                    <label class="text-body-3" for="checkBox1">Any</label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkBox2" />
                    <label class="text-body-3" for="checkBox2"
                      >1+ <i class="icon-star1"></i
                    ></label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkBox3" />
                    <label class="text-body-3" for="checkBox3">
                      2+
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                    </label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input type="checkbox" name="checkbox" id="checkBox4" />
                    <label class="text-body-3" for="checkBox4">
                      3+
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                    </label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input
                      type="checkbox"
                      name="checkbox"
                      id="checkBox5"
                      checked
                    />
                    <label class="text-body-3" for="checkBox5">
                      4+
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                    </label>
                  </fieldset>
                  <fieldset class="pb-8 check-box style-2 pl-3">
                    <input
                      type="checkbox"
                      name="checkbox"
                      id="checkBox6"
                      checked
                    />
                    <label class="text-body-3" for="checkBox6">
                      5+
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                      <i class="icon-star1"></i>
                    </label>
                  </fieldset>
                </div>
                <a href="#" class="tf-btn color-primary">Find Tours</a>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="tf-sort pb-40">
                <div class="tf-sort-left">
                  <p class="text-body-3 wow fadeInUp">1,200+ Tours Results</p>
                  <div class="fillter-btn">
                    <a
                      href="#canvasFillter"
                      data-bs-toggle="offcanvas"
                      class="btn-fillter text-body-2 fw-6"
                    >
                      <div class="icon">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          version="1.1"
                          width="15"
                          height="15"
                          viewBox="0 0 256 256"
                          xml:space="preserve"
                        >
                          <defs></defs>
                          <g
                            style="
                              stroke: none;
                              stroke-width: 0;
                              stroke-dasharray: none;
                              stroke-linecap: butt;
                              stroke-linejoin: miter;
                              stroke-miterlimit: 10;
                              fill: none;
                              fill-rule: nonzero;
                              opacity: 1;
                            "
                            transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)"
                          >
                            <path
                              d="M 87.632 28.952 H 2.368 C 1.06 28.952 0 27.892 0 26.584 V 19.32 c 0 -1.308 1.06 -2.368 2.368 -2.368 h 85.263 c 1.308 0 2.368 1.06 2.368 2.368 v 7.263 C 90 27.892 88.94 28.952 87.632 28.952 z"
                              style="
                                stroke: none;
                                stroke-width: 1;
                                stroke-dasharray: none;
                                stroke-linecap: butt;
                                stroke-linejoin: miter;
                                stroke-miterlimit: 10;
                                fill: rgb(0, 0, 0);
                                fill-rule: nonzero;
                                opacity: 1;
                              "
                              transform=" matrix(1 0 0 1 0 0) "
                              stroke-linecap="round"
                            />
                            <path
                              d="M 76.918 51 H 13.083 c -1.308 0 -2.368 -1.06 -2.368 -2.368 v -7.263 c 0 -1.308 1.06 -2.368 2.368 -2.368 h 63.835 c 1.308 0 2.368 1.06 2.368 2.368 v 7.263 C 79.286 49.94 78.226 51 76.918 51 z"
                              style="
                                stroke: none;
                                stroke-width: 1;
                                stroke-dasharray: none;
                                stroke-linecap: butt;
                                stroke-linejoin: miter;
                                stroke-miterlimit: 10;
                                fill: rgb(0, 0, 0);
                                fill-rule: nonzero;
                                opacity: 1;
                              "
                              transform=" matrix(1 0 0 1 0 0) "
                              stroke-linecap="round"
                            />
                            <path
                              d="M 60.846 73.048 H 29.154 c -1.308 0 -2.368 -1.06 -2.368 -2.368 v -7.263 c 0 -1.308 1.06 -2.368 2.368 -2.368 h 31.692 c 1.308 0 2.368 1.06 2.368 2.368 v 7.263 C 63.214 71.988 62.154 73.048 60.846 73.048 z"
                              style="
                                stroke: none;
                                stroke-width: 1;
                                stroke-dasharray: none;
                                stroke-linecap: butt;
                                stroke-linejoin: miter;
                                stroke-miterlimit: 10;
                                fill: rgb(0, 0, 0);
                                fill-rule: nonzero;
                                opacity: 1;
                              "
                              transform=" matrix(1 0 0 1 0 0) "
                              stroke-linecap="round"
                            />
                          </g>
                        </svg>
                      </div>
                      Fillter
                    </a>
                  </div>
                </div>
                <div class="tf-sort-right">
                  <p class="text-body-3 wow fadeInUp" data-wow-delay="0.1s">
                    Sort by:
                  </p>
                  <div class="nice-select border">
                    <span class="current">Default</span>
                    <ul class="list">
                      <li class="option option-all">Default</li>
                      <li class="option">Discovery</li>
                      <li class="option">Hiking</li>
                      <li class="option">Kayaking</li>
                      <li class="option">Camping</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="grid-layout-3">
                <div class="tour-grid hover-img style-2 wow fadeInUp">
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-9.jpg"
                      data-src="image/tour-grid/tour-grid-9.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1"
                      >Adventure</a
                    >
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.2</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                       href="{{ route('tours-details') }}"
                      class="title text-body-2 fw-6 pb-7"
                      >Conquer Stunning Trails and Scenic Paths</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$243</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-10.jpg"
                      data-src="image/tour-grid/tour-grid-10.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1"
                      >Discovery</a
                    >
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.6</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Uncover Hidden Historical Wonders and Secrets</a
                    >

                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$213</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-11.jpg"
                      data-src="image/tour-grid/tour-grid-11.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1"
                      >Discovery</a
                    >
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.7</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Experience the Mysteries of the Ancient World</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$325</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="tour-grid hover-img style-2 wow fadeInUp">
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-12.jpg"
                      data-src="image/tour-grid/tour-grid-12.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1">Beach</a>
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.2</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Explore Majestic Rivers and Waterways</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        22 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$92</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-13.jpg"
                      data-src="image/tour-grid/tour-grid-13.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1">Beach</a>
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.9</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Wild Adventures Under the Beautiful Starry Sky</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$354</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-14.jpg"
                      data-src="image/tour-grid/tour-grid-14.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1">Beach</a>
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.6</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Retreat in Nature’s Untouched Beauty</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$254</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="tour-grid hover-img style-2 wow fadeInUp">
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-15.jpg"
                      data-src="image/tour-grid/tour-grid-15.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1"
                      >Discovery</a
                    >
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.6</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Journey Through Rich Culture and History</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$180</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-16.jpg"
                      data-src="image/tour-grid/tour-grid-16.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1">Beach</a>
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.9</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Perfect Getaway in the Great Outdoors</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$352</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div
                  class="tour-grid hover-img style-2 wow fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <a href="tours-details-2.html" class="link-img"></a>
                  <div class="image">
                    <img
                      src="image/tour-grid/tour-grid-13.jpg"
                      data-src="image/tour-grid/tour-grid-13.jpg"
                      alt=""
                      class="lazyload"
                    />
                    <div class="heart tf-action-btns"></div>
                    <a class="caption-2 tf-btn style-uppercase ls-1">Beach</a>
                  </div>
                  <div class="tour-grid-content">
                    <div class="top">
                      <div class="map-ping">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 24 28"
                          fill="none"
                          xmlns="../../../www.w3.org/2000/svg.html"
                        >
                          <path
                            d="M21 14C21 21 12 27 12 27C12 27 3 21 3 14C3 11.6131 3.94821 9.32387 5.63604 7.63604C7.32387 5.94821 9.61305 5 12 5C14.3869 5 16.6761 5.94821 18.364 7.63604C20.0518 9.32387 21 11.6131 21 14Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M12 17C13.6569 17 15 15.6569 15 14C15 12.3431 13.6569 11 12 11C10.3431 11 9 12.3431 9 14C9 15.6569 10.3431 17 12 17Z"
                            stroke="#fff"
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>

                        <a class="text-body-3 text">Los Anglese</a>
                      </div>
                      <div class="rating">
                        <div class="number text-body-3 fw-6">4.9</div>
                        <i class="icon-star1"></i>
                      </div>
                    </div>
                    <a
                      href="tours-details-2.html"
                      class="title text-body-2 fw-6 pb-7"
                      >Wild Adventures Under the Beautiful Starry Sky</a
                    >
                    <div class="tour-grid-details pb-10">
                      <a class="people text-body-3">
                        <i class="icon-Users1"></i>
                        32 People
                      </a>
                      <a class="days text-body-3">
                        <i class="icon-Clock1"></i>
                        3 Days/2 Night
                      </a>
                    </div>
                    <div class="price text-body-3">
                      Starting from: <span class="text-body-2 fw-6">$354</span>
                    </div>
                  </div>
                  <div class="overlay"></div>
                </div>
              </div>
              <div class="wg-pagination wow fadeInUp" data-wow-delay="0s">
                <ul class="flex justify-flex-start">
                  <li class="text-body-2">1</li>
                  <li class="active text-body-2">2</li>
                  <li class="text-body-2">3</li>
                  <li class="text-body-2"><i class="icon-next1"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.main-container -->
            <!-- Popup-fillter -->
            <div
            class="offcanvas offcanvas-left offcanvas-fillter"
            id="canvasFillter"
          >
            <div class="wg-fillter">
              <div class="title-fillter">
                <h4 class="fw-6">Fillter</h4>
                <button
                  class="btn-close-fillter"
                  type="button"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                >
                  <i class="icon-close1"></i>
                </button>
              </div>
              <div class="wg-location wg-fillter-content">
                <div class="title text-body-3 fw-6">Location</div>
                <div class="nice-select border">
                  <span class="current">Locations</span>
                  <ul class="list">
                    <li class="option option-all">Locations</li>
                    <li class="option">Barcelona</li>
                    <li class="option">Fuji, Japan</li>
                    <li class="option">Golden Gate</li>
                    <li class="option">Gyeongju</li>
                    <li class="option">Ha Noi</li>
                    <li class="option">Heidelberg</li>
                    <li class="option">Miami</li>
                    <li class="option">Switzerland</li>
                    <li class="option">Thailand</li>
                    <li class="option">United Kingdom</li>
                  </ul>
                </div>
              </div>
              <div class="wg-tour-type wg-fillter-content">
                <div class="title text-body-3 fw-6">Tour Type</div>
                <div class="nice-select border" tabindex="0">
                  <span class="current">Select Type</span>
                  <ul class="list style-radio">
                    <li data-value="select-type" class="option">Select Type</li>
                    <li data-value="adventure" class="option">Adventure</li>
                    <li data-value="discovery" class="option">Discovery</li>
                    <li data-value="beach" class="option">Beach</li>
                    <li data-value="wildlife" class="option">Wildlife</li>
                    <li data-value="camping" class="option">Camping</li>
                  </ul>
                </div>
              </div>
              <div class="wg-date wg-fillter-content">
                <div class="title text-body-3 fw-6">Date</div>
                <fieldset class="flex items-center">
                  <div class="icon">
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="../../../www.w3.org/2000/svg.html"
                    >
                      <path
                        d="M16.2222 3.33398H3.77778C2.79594 3.33398 2 4.08018 2 5.00065V16.6673C2 17.5878 2.79594 18.334 3.77778 18.334H16.2222C17.2041 18.334 18 17.5878 18 16.6673V5.00065C18 4.08018 17.2041 3.33398 16.2222 3.33398Z"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                      <path
                        d="M12.834 1.66602V4.99935"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                      <path
                        d="M6.16602 1.66602V4.99935"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                      <path
                        d="M2 8.33398H18"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </div>
                  <input
                    class="text-body-3"
                    type="text"
                    name="date-in"
                    id="datepicker2"
                    tabindex="2"
                    value=""
                    aria-required="true"
                    required=""
                    placeholder="DD/MM/YYYY"
                  />
                </fieldset>
              </div>
              <div class="form-people wg-fillter-content">
                <div class="text-body-3 title fw-6">People</div>
                <div
                  class="number-people style-default dropdown-toggle"
                  id="Boxsearch1"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  data-bs-auto-close="outside"
                  role="button"
                >
                  <div class="icon">
                    <svg
                      width="21"
                      height="20"
                      viewBox="0 0 21 20"
                      fill="none"
                      xmlns="../../../www.w3.org/2000/svg.html"
                    >
                      <path
                        d="M17.3676 17.5002V15.7355C17.3676 14.7994 16.9958 13.9017 16.3339 13.2398C15.672 12.5779 14.7743 12.2061 13.8382 12.2061H6.77941C5.84335 12.2061 4.94563 12.5779 4.28374 13.2398C3.62185 13.9017 3.25 14.7994 3.25 15.7355V17.5002"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M10.3088 9.55882C12.2581 9.55882 13.8382 7.97865 13.8382 6.02941C13.8382 4.08017 12.2581 2.5 10.3088 2.5C8.35959 2.5 6.77942 4.08017 6.77942 6.02941C6.77942 7.97865 8.35959 9.55882 10.3088 9.55882Z"
                        stroke="#121212"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                  <div>
                    <span class="text-body-3 adults">0</span>
                    <span class="text-body-3">Adults -</span>
                    <span class="text-body-3 children">0</span>
                    <span class="text-body-3">children</span>
                  </div>
                </div>
                <ul class="dropdown-menu" aria-labelledby="Boxsearch1">
                  <li class="text-body-3 dropdown-item">
                    <div class="text">Adults <span>(12 Years+)</span></div>
                    <div class="quantity">
                      <span class="btn-quantity minus-btn minus-btn-1"></span>
                      <input
                        type="text"
                        name="number-adults1"
                        value="0"
                        id="number-adults1"
                        class="number-adults"
                      />
                      <span class="btn-quantity plus-btn plus-btn-1"></span>
                    </div>
                  </li>
                  <li class="text-body-3 dropdown-item">
                    <div class="text">Children <span>(2-12 Years)</span></div>
                    <div class="quantity">
                      <span class="btn-quantity minus-btn minus-btn-2"></span>
                      <input
                        type="text"
                        name="number-children1"
                        value="0"
                        id="number-children1"
                        class="number-children"
                      />
                      <span class="btn-quantity plus-btn plus-btn-2"></span>
                    </div>
                  </li>
                  <li class="text-body-3 dropdown-item">
                    <div class="text">Infants <span>(0-2 Years)</span></div>
                    <div class="quantity">
                      <span class="btn-quantity minus-btn minus-btn-3"></span>
                      <input
                        type="text"
                        name="number-infants1"
                        value="0"
                        id="number-infants1"
                        class="number-infants"
                      />
                      <span class="btn-quantity plus-btn plus-btn-3"></span>
                    </div>
                  </li>
                  <li class="text-body-3 dropdown-item">
                    <div class="text">Pets</div>
                    <div class="quantity">
                      <span class="btn-quantity minus-btn minus-btn-4"></span>
                      <input
                        type="text"
                        name="number-Pets1"
                        value="0"
                        id="number-pets1"
                        class="number-pets"
                      />
                      <span class="btn-quantity plus-btn plus-btn-4"></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="range-slider wg-fillter-content">
                <div class="title text-body-3 fw-6">Price</div>
                <div id="range-two-val-1" class="range-two-val"></div>
    
                <div class="bottom">
                  <div class="value">
                    <div class="price-min" id="skip-value-lower-1"></div>
                    <span>-</span>
                    <div class="price-max" id="skip-value-upper-1"></div>
                  </div>
                </div>
              </div>
              <div class="wg-amenities wg-fillter-content pb-16">
                <div class="title text-body-3 fw-6">Amenities</div>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-1" checked />
                  <label class="text-body-3" for="Checkbox-1"
                    >Air Conditioning</label
                  >
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-2" />
                  <label class="text-body-3" for="Checkbox-2">Alarm System</label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-3" />
                  <label class="text-body-3" for="Checkbox-3"
                    >Central Heating</label
                  >
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-4" checked />
                  <label class="text-body-3" for="Checkbox-4"> Laundry</label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-5" />
                  <label class="text-body-3" for="Checkbox-5">Microwave</label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-6" />
                  <label class="text-body-3" for="Checkbox-6">Outdoor</label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="Checkbox-7" />
                  <label class="text-body-3" for="Checkbox-7">Refrigerator</label>
                </fieldset>
              </div>
              <div class="wg-review wg-fillter-content pb-16">
                <div class="title text-body-3 fw-6">Review Score</div>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-1" />
                  <label class="text-body-3" for="CheckBox-1">Any</label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-2" />
                  <label class="text-body-3" for="CheckBox-2"
                    >1+ <i class="icon-star1"></i
                  ></label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-3" />
                  <label class="text-body-3" for="CheckBox-3">
                    2+
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                  </label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-4" />
                  <label class="text-body-3" for="CheckBox-4">
                    3+
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                  </label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-5" checked />
                  <label class="text-body-3" for="CheckBox-5">
                    4+
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                  </label>
                </fieldset>
                <fieldset class="pb-8 check-box style-2 pl-3">
                  <input type="checkbox" name="checkbox" id="CheckBox-6" checked />
                  <label class="text-body-3" for="CheckBox-6">
                    5+
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                    <i class="icon-star1"></i>
                  </label>
                </fieldset>
              </div>
              <a href="#" class="tf-btn color-primary">Find Tours</a>
            </div>
          </div>
          <!-- /.popup-fillter -->
          <!-- Go-top -->
      <div class="progress-wrap">
        <svg
          class="progress-circle svg-content"
          width="100%"
          height="100%"
          viewBox="-1 -1 102 102"
        >
          <path
            d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="
              transition: stroke-dashoffset 10ms linear;
              stroke-dasharray: 307.919, 307.919;
              stroke-dashoffset: 277.672;
            "
          ></path>
        </svg>
      </div>
      <!-- /.go-top -->
    </div>
</body>
@endsection