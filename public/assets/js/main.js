/////////////////////////////////////// open and close mobile navbar
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.getElementById("mobile-menu");
  const overlay = document.getElementById("overlay");
  const openBtn = document.querySelector(".menu-mobile");
  function openMenu() {
    menu.classList.remove("translate-x-full");
    overlay.classList.remove("hidden");
    overlay.classList.add("opacity-100");
  }
  function closeMenu() {
    menu.classList.add("translate-x-full");
    overlay.classList.add("hidden");
    overlay.classList.remove("opacity-100");
  }
  openBtn.addEventListener("click", openMenu);
  overlay.addEventListener("click", closeMenu);
});
/////////////////////////////////////// Quantity input
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".quantity-container").forEach(container => {
    const input = container.querySelector("input[type='number']");
    const incrementButton = container.querySelector("button[data-action='increment']");
    const decrementButton = container.querySelector("button[data-action='decrement']");
    incrementButton.addEventListener("click", function () {
      let value = parseInt(input.value, 10);
      input.value = value + 1;
    });
    decrementButton.addEventListener("click", function () {
      let value = parseInt(input.value, 10);
      if (value > 1) {
        input.value = value - 1;
      }
    });
  });
});
/////////////////////////////////////// open filter in search products
if (document.getElementById("mobile-filter")) {
  const filters = document.getElementById("mobile-filter");
  const openFilter = document.querySelector(".filter-mobile");
  const closeFilter = document.getElementById("closeFilter");
  function openMenu() {
    filters.classList.remove("translate-y-full");
  }
  function closeMenu() {
    filters.classList.add("translate-y-full");
  }
  openFilter.addEventListener("click", openMenu);
  closeFilter.addEventListener("click", closeMenu);
}
/////////////////////////////////////// open and close menu/submenu
document.addEventListener("DOMContentLoaded", function () {
  const menuToggles = document.querySelectorAll(".menu-toggle");
  menuToggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      const icon = this.querySelector("img");
      if (submenu.classList.contains("hidden")) {
        submenu.classList.remove("hidden");
        icon.classList.add("rotate-180");
      } else {
        submenu.classList.add("hidden");
        icon.classList.remove("rotate-180");
      }
    });
  });
});
/////////////////////////////////////// go to up btn
window.addEventListener("scroll", function () {
  if(document.getElementById("btn-back-to-top")){
    let btnGoToUp = document.getElementById("btn-back-to-top");
    if (window.scrollY > 200) {
      btnGoToUp.style.display = "flex";
    } else {
      btnGoToUp.style.display = "none";
    }
  }
});
if (document.getElementById("btn-back-to-top")) {
  document.getElementById("btn-back-to-top").addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}
if (document.getElementById("btn-back-to-top")) {
  document.getElementById("btn-back-to-top").style.display = "none";
}
//////////////////////////////////////// copy to clipboard
function copyToClipboard() {
  const text = document.getElementById("shortLink").innerText;
  navigator.clipboard.writeText(text);
  const icon = document.getElementById("copyIcon");
  icon.src = "./assets/image/icons/check-circle.svg";
  setTimeout(() => {
    icon.src = "./assets/image/icons/icons8-copy-64.png') }}";
  }, 3000);
}
/////////////////////////////////////// verify 6 code
const inputElements = [...document.querySelectorAll('input.code-input')]
if (inputElements) {
  // window.addEventListener("load", () => inputElements[0].focus());
  inputElements.forEach((ele,index)=>{
    ele.addEventListener('keydown',(e)=>{
      if(e.keyCode === 8 && e.target.value==='') inputElements[Math.max(0,index-1)].focus()
    })
    ele.addEventListener('input',(e)=>{
      const [first,...rest] = e.target.value
      e.target.value = first ?? ''
      const lastInputBox = index===inputElements.length-1
      const didInsertContent = first!==undefined
      if(didInsertContent && !lastInputBox) {
        inputElements[index+1].focus()
        inputElements[index+1].value = rest.join('')
        inputElements[index+1].dispatchEvent(new Event('input'))
      }
    })
  })
}
function onSubmit(e){
  e.preventDefault()
  const code = inputElements.map(({value})=>value).join('')
  console.log(code)
}
/////////////////////////////////////// select category
const products = {
  electronics: ['فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی'],
  clothing: ['فرز الماسی مانی', 'فرز الماسی مانی'],
  books: ['فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی'],
  sports: ['فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی'],
  beauty: ['فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی', 'فرز الماسی مانی'],
};
const productList = document.getElementById('productList');
const buttons = document.querySelectorAll('.category-btn');
buttons.forEach(btn => {
  btn.addEventListener('click', () => {
    const category = btn.dataset.category;
    const items = products[category] || [];
    productList.innerHTML = items.map(item =>
      `<div class="card swiper-slide bg-white border border-zinc-200 rounded-2xl p-2 md:p-3 text-sm hover:shadow-custom transition-shadow">
      <a href="" class="text-zinc-800">
        <img class="rounded-xl mb-3" src="./assets/image/products/1.webp">
      </a>
      <p class="text-zinc-400 text-xs">
        Lap Top Lenovo Laser 107W
      </p>
      <a href="" class="text-zinc-800 text-xs md:text-sm h-8 lg:h-10 line-clamp-2 mt-2">
        لپ تاپ لنوو تک رنگ مدل Laser 107W اصلی
      </a>
      <div class="flex items-center justify-between mt-4">
        <div class="flex gap-1.5">
          <div class="size-4 bg-zinc-800 rounded-full"></div>
          <div class="size-4 bg-zinc-500 rounded-full"></div>
          <div class="size-4 bg-zinc-300 rounded-full"></div>
        </div>
        <div class="flex items-start gap-x-1 text-xs text-zinc-500">
          <span>
            <span>
              (72)
            </span>
            <span>
              4.4
            </span>
          </span>
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#f9bc00" viewBox="0 0 256 256"><path d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"></path></svg>
        </div>
      </div>
      <div class="flex items-center justify-end border-t border-dashed border-zinc-300 mt-4 pt-2">
        <div class="text-zinc-800 flex items-center gap-x-1 justify-end font-yekanBakhBold text-lg">
          1,270,000
          <img class="size-4" src="./assets/image/icons/toman.png') }}" alt="">
        </div>
      </div>
    </div>`
    ).join('');
    buttons.forEach(b => b.classList.remove('bg-zinc-100', 'text-primary-500'));
    btn.classList.add('bg-zinc-100', 'text-primary-500');
  });
});
if (buttons[0]) {
  buttons[0].click();
}
/////////////////////////////////////// modal login register
document.querySelectorAll('.show-modal-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.getAttribute('data-modal-id');
    const modal = document.getElementById(id);
    const content = modal.querySelector('.modal-content');

    modal.classList.remove('hidden');

    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        content.classList.remove('opacity-0', 'scale-95');
        content.classList.add('opacity-100', 'scale-100');
      });
    });
  });
});
document.querySelectorAll('.close-modal').forEach(btn => {
  btn.addEventListener('click', () => {
    const modal = btn.closest('.Mymodal');
    const content = modal.querySelector('.modal-content');
    content.classList.remove('opacity-100', 'scale-100');
    content.classList.add('opacity-0', 'scale-95');
    setTimeout(() => modal.classList.add('hidden'), 300);
  });
});
document.querySelectorAll('.Mymodal').forEach(modal => {
  modal.addEventListener('click', e => {
    if (e.target === modal) {
      const content = modal.querySelector('.modal-content');
      content.classList.remove('opacity-100', 'scale-100');
      content.classList.add('opacity-0', 'scale-95');
      setTimeout(() => modal.classList.add('hidden'), 300);
    }
  });
});
/////////////////////////////////////// product image in single product
const mainImage = document.getElementById('mainImage');
const zoomBox = document.getElementById('zoomBox');
const zoomLens = document.getElementById('zoomLens');
function isMobile() {
    return window.innerWidth <= 768;
}
if (mainImage) {

  mainImage.addEventListener('mousemove', function(event) {
      if (isMobile()) return;
      const { left, top, width, height } = mainImage.getBoundingClientRect();
      const x = event.clientX - left;
      const y = event.clientY - top;
      const lensSize = 80;
      const lensX = Math.max(0, Math.min(x - lensSize / 2, width - lensSize));
      const lensY = Math.max(0, Math.min(y - lensSize / 2, height - lensSize));
      zoomLens.style.left = `${lensX}px`;
      zoomLens.style.top = `${lensY}px`;
      const zoomLevel = 2;
      zoomBox.style.backgroundImage = `url(${mainImage.src})`;
      zoomBox.style.backgroundSize = `${width * zoomLevel}px ${height * zoomLevel}px`;
      zoomBox.style.backgroundPosition = `-${lensX * zoomLevel}px -${lensY * zoomLevel}px`;
      zoomLens.classList.remove('hidden');
      zoomBox.classList.remove('hidden');
  });
}
if (mainImage) {
  mainImage.addEventListener('mouseleave', function() {
      zoomLens.classList.add('hidden');
      zoomBox.classList.add('hidden');
  });
}
function changeImage(element) {
    mainImage.src = element.src;
}
/////////////////////////////////////// price filter
let priceFilter = document.querySelectorAll("#shop-price-slider"),
  priceMinFilter = document.querySelectorAll("#shop-price-slider-min"),
  priceMaxFilter = document.querySelectorAll("#shop-price-slider-max");
  priceFilter.forEach((e) => {
    noUiSlider.create(e, {
      cssPrefix: "range-slider-",
      start: [0, 1e8],
      direction: "rtl",
      margin: 1,
      connect: !0,
      range: { min: 0, max: 10000000 },
      format: {
        to: function (e) {
          return e.toLocaleString("en-US", {
            style: "decimal",
            maximumFractionDigits: 0,
          });
        },
        from: function (e) {
          return parseFloat(e.replace(/,/g, ""));
        },
      },
    }),
      e.noUiSlider.on("update", function (e, t) {
        t
          ? priceMaxFilter.forEach((a) => {
              a.innerHTML = e[t];
            })
          : priceMinFilter.forEach((a) => {
              a.innerHTML = e[t];
            });
      });
  })
////////////////////////////////////////// modal login register
document.querySelectorAll(".open-modal").forEach((button) => {
  button.addEventListener("click", () => {
    const modalId = button.getAttribute("data-modal");
    const modal = document.getElementById(modalId);
    const modalBox = modal.querySelector(".modal-box");

    modal.classList.remove("hidden");
    setTimeout(() => {
      modal.classList.add("opacity-100");
      modalBox.classList.remove("opacity-0", "scale-90");
    }, 10);
  });
});
document.querySelectorAll(".close-modal").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".modal");
    const modalBox = modal.querySelector(".modal-box");
    modal.classList.remove("opacity-100");
    modalBox.classList.add("opacity-0", "scale-90");
    setTimeout(() => modal.classList.add("hidden"), 300);
  });
});
document.querySelectorAll(".modal").forEach((modal) => {
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      const modalBox = modal.querySelector(".modal-box");
      modal.classList.remove("opacity-100");
      modalBox.classList.add("opacity-0", "scale-90");
      setTimeout(() => modal.classList.add("hidden"), 300);
    }
  });
});
