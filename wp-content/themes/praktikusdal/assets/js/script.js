! function (e) {
  var t = {};

  function r(s) {
    if (t[s]) return t[s].exports;
    var n = t[s] = {
      i: s,
      l: !1,
      exports: {}
    };
    return e[s].call(n.exports, n, n.exports, r), n.l = !0, n.exports
  }
  r.m = e, r.c = t, r.d = function (e, t, s) {
    r.o(e, t) || Object.defineProperty(e, t, {
      enumerable: !0,
      get: s
    })
  }, r.r = function (e) {
    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
      value: "Module"
    }), Object.defineProperty(e, "__esModule", {
      value: !0
    })
  }, r.t = function (e, t) {
    if (1 & t && (e = r(e)), 8 & t) return e;
    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
    var s = Object.create(null);
    if (r.r(s), Object.defineProperty(s, "default", {
        enumerable: !0,
        value: e
      }), 2 & t && "string" != typeof e)
      for (var n in e) r.d(s, n, function (t) {
        return e[t]
      }.bind(null, n));
    return s
  }, r.n = function (e) {
    var t = e && e.__esModule ? function () {
      return e.default
    } : function () {
      return e
    };
    return r.d(t, "a", t), t
  }, r.o = function (e, t) {
    return Object.prototype.hasOwnProperty.call(e, t)
  }, r.p = "", r(r.s = 5)
}([function (e, t) {
  document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelector(".header__toggle");
    e && e.addEventListener("click", () => e.classList.toggle("open"))
  })
}, function (e, t) {
  document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelector(".menu");
    if (e) {
      let t = e.querySelectorAll(".menu__item"),
        r = document.querySelector(".header__toggle");
      t.forEach(e => {
        e.addEventListener("click", () => {
          r.classList.remove("open")
        })
      })
    }
  })
}, function (e, t) {
  class r {
    constructor(e) {
      this.form = e.form, this.url = e.url, this.method = e.method, this.alert = e.alertOpt.alert, this.classSuccess = e.alertOpt.classSuccess, this.classError = e.alertOpt.classError, this.alertMessage = e.alertOpt.message, this.form.forEach(e => {
        e.addEventListener("submit", e => {
          this.sendRequest(e)
        })
      })
    }
    createRequest(e) {
      const t = new FormData(e);
      fetch(e.action, {
        method: "POST",
        body: t
      }).then(t => {
        200 === t.status ? (this.showAlertSuccess(this.setMessageSuccess()), e.classList.contains("form--popup") && (e.style.display = "none")) : this.showAlertError(this.setMessageError())
      }).catch(e => console.error(e))
    }
    sendRequest(e) {
      e.preventDefault(), this.createRequest(e.currentTarget)
    }
    showAlertSuccess(e) {
      this.alert.classList.add(this.classSuccess), this.alertMessage.innerHTML = e, this.alert.style.display = "flex"
    }
    showAlertError(e) {
      this.alert.classList.add(this.classError), this.alertMessage.innerHTML = e, this.alert.style.display = "flex"
    }
    setMessageSuccess() {
      return "<h6>Сообщение отправлено!</h6><p>Мы свяжемся с вами в ближайшее время</p>"
    }
    setMessageError() {
      return "<p>Упс! Что-то пошло не так :(</p>"
    }
  }
  document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelectorAll(".form--post");
    e && new r({
      form: e,
      url: "",
      method: "POST",
      alertOpt: {
        alert: document.querySelector(".alert"),
        classSuccess: "alert--success",
        classError: "alert--error",
        message: document.querySelector(".alert__message")
      }
    })
  })
}, function (e, t) {
  class r {
    constructor(e) {
      this.alert = e.alert, this.cancel = e.cancel
    }
    closeAlert() {
      this.alert.addEventListener("click", e => {
        e.target.closest(`.${this.cancel.className}`) && (this.alert.style.display = "none")
      })
    }
  }
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".alert") && new r({
      alert: document.querySelector(".alert"),
      cancel: document.querySelector(".alert__close")
    }).closeAlert()
  })
}, function (e, t) {
  document.addEventListener("DOMContentLoaded", () => {
    const e = document.querySelectorAll(".rating");
    e && e.forEach(e => {
      let t = +e.querySelector(".rating__value").textContent || 5,
        r = e.querySelectorAll(".rating__item");
      for (let e = 0; e < t; e++) {
        r[e].querySelector(".rating__icon").style.fill = "#FDC03F"
      }
    })
  })
}, function (e, t, r) {
  "use strict";
  r.r(t);
  r(0), r(1), r(2), r(3), r(4);
}]);

const universities = document.getElementById('universities');
if ( universities ) {
  let items = universities.querySelectorAll('.universities__item');
  let more = universities.querySelector('.universities__more');

  items.forEach( (item, i) => {
    if (i > 5) {
      item.style.display = 'none';
    }
  } );

  more.addEventListener('click', () => {
    if (more.value === 'true') {
      more.textContent = 'Скрыть';
      more.value = false;

      items.forEach( (item, i) => {
        if (i > 5) {
          item.style.display = 'block';
        }
      } );
    } else {
      more.textContent = 'Показать ещё';
      more.value = true;

      items.forEach( (item, i) => {
        if (i > 5) {
          item.style.display = 'none';
        }
      } );
    }
  });
}

const services = document.getElementById('services');
if ( services ) {
  let items = services.querySelectorAll('.our-services__item');
  let more = services.querySelector('.universities__more');

  items.forEach( (item, i) => {
    if (i > 5) {
      item.style.display = 'none';
    }
  } );

  more.addEventListener('click', () => {
    if (more.value === 'true') {
      more.textContent = 'Скрыть';
      more.value = false;

      items.forEach( (item, i) => {
        if (i > 5) {
          item.style.display = 'block';
        }
      } );
    } else {
      more.textContent = 'Показать ещё';
      more.value = true;

      items.forEach( (item, i) => {
        if (i > 5) {
          item.style.display = 'none';
        }
      } );
    }
  });
}
function show_form(){
  if (document.getElementById('form-order')!=null){
    document.getElementById('form-order').style.display='block';
  }
}

const formOrder = document.getElementById('form-order');
if (formOrder) {
  setTimeout(() => {
    formOrder.style.display = 'block';
  }, 10000);

  let form = formOrder.querySelector('.form-order');
  let close = formOrder.querySelector('.form-order__close');
  
  form.addEventListener('submit', () => formOrder.style.display = 'none');
  close.addEventListener('click', () => formOrder.style.display = 'none');
}
document.addEventListener("DOMContentLoaded",()=>{
  if (document.getElementsByClassName('show-form-button').length!=0) {
    let s = document.getElementsByClassName('show-form-button');
    for(let i=0;i<s.length;i++){
      s[i].addEventListener("click",show_form);
    }
  }
});