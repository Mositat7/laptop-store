
///////////////////////////////
document.addEventListener('DOMContentLoaded', function () {

    /* ======== مقادیر از Blade به JS ======== */
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    const maxStock = window.productStock || 1; // از Blade پاس داده میشه: <script>window.productStock = {{ $product->stock }};</script>
    const cartAddUrl = window.cartAddUrl;      // <script>window.cartAddUrl = "{{ route('cart.add') }}";</script>
    const reviewStoreUrl = window.reviewStoreUrl; // <script>window.reviewStoreUrl = "{{ route('reviews.store') }}";</script>

    /* ======== مقداردهی اولیه ======== */
    let quantity = 1;

    /* ======== دکمه‌های افزایش/کاهش ======== */
    document.querySelectorAll('[data-action="increment"]').forEach(btn => {
        btn.addEventListener('click', () => {
            if (quantity < maxStock) {
                quantity++;
                const input = document.querySelector('.quantity-container input');
                if (input) input.value = quantity;
            }
        });
    });

    document.querySelectorAll('[data-action="decrement"]').forEach(btn => {
        btn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                const input = document.querySelector('.quantity-container input');
                if (input) input.value = quantity;
            }
        });
    });

    window.getQuantity = function () {
        return quantity;
    };

    /* ======== افزودن به سبد خرید ======== */
    window.addToCart = async function (productId, qty) {
        const buttons = document.querySelectorAll('button[onclick*="addToCart"]');
        buttons.forEach(btn => {
            btn.innerHTML = '<span class="loader"></span> در حال افزودن...';
            btn.disabled = true;
        });

        try {
            const res = await fetch(cartAddUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: qty
                })
            });

            const data = await res.json();

            if (data.success) {
                showAlert(data.message || 'محصول به سبد خرید اضافه شد', 'success');
                updateCartUI(data);
            } else {
                showAlert(data.message || 'خطا در افزودن به سبد خرید', 'error');
            }
        } catch (e) {
            console.error(e);
            showAlert('خطا در ارتباط با سرور', 'error');
        } finally {
            buttons.forEach(btn => {
                btn.innerHTML = 'افزودن به سبد خرید';
                btn.disabled = false;
            });
        }
    };

    /* ======== آپدیت UI سبد خرید ======== */
    function updateCartUI(data) {
        updateCartCount(data.cart_count || data.total_items);
        updateCartDropdown(data.cart_items, data.total_items, data.total_price);
    }

    function updateCartCount(count) {
        document.querySelectorAll('.cart-count').forEach(el => {
            el.textContent = count;
            el.classList.toggle('hidden', count <= 0);
        });
    }

    function updateCartDropdown(cartItems, totalItems, totalPrice) {
        const cartDropdown = document.getElementById('cart-dropdown');
        if (!cartDropdown) return;

        let html = '';
        if (cartItems && cartItems.length > 0) {
            html = `<ul class="main-scroll h-full space-y-2 divide-y divide-gray-100 overflow-y-auto p-5 pl-2">`;
            cartItems.forEach(item => {
                html += `
                <li>
                    <div class="flex gap-x-2 py-5">
                        <div class="relative min-w-fit">
                            <a href="/product/${item.product_slug}">
                                <img alt="${item.product_name}"
                                     class="h-[120px] w-[120px] rounded-xl object-cover"
                                     src="${item.product_image}">
                            </a>
                        </div>
                        <div class="w-full space-y-1.5">
                            <a class="line-clamp-2 h-12 text-zinc-700 font-yekanBakhRegular"
                               href="/product/${item.product_slug}">
                                ${item.product_name}
                            </a>
                            <div class="flex items-center justify-between gap-x-2">
                                <div class="text-gray-700">
                                    <span class="text-sm">${Number(item.product_price).toLocaleString()}</span>
                                    <span class="text-sm">تومان</span>
                                </div>
                                <div class="quantity-container flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                    <button class="cursor-pointer update-cart" data-action="increment" data-cart-id="${item.id}">
                                        <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                    </button>
                                    <input value="${item.quantity}" disabled type="number" class="flex h-5 w-full grow bg-transparent text-center text-sm text-zinc-700 outline-none">
                                    <button class="cursor-pointer update-cart" data-action="decrement" data-cart-id="${item.id}">
                                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>`;
            });
            html += `</ul>`;
        } else {
            html = `<div class="h-full flex items-center justify-center text-zinc-500 text-sm p-5">سبد خرید شما خالی است.</div>`;
        }

        const container = cartDropdown.querySelector('.h-60');
        if (container) container.innerHTML = html;

        const totalItemsEl = cartDropdown.querySelector('.text-sm.text-zinc-500');
        if (totalItemsEl) totalItemsEl.textContent = `${totalItems} کالا`;

        const priceSection = cartDropdown.querySelector('.border-t.border-gray-100');
        if (priceSection) {
            if (totalItems > 0) {
                priceSection.classList.remove('hidden');
                const totalPriceEl = priceSection.querySelector('.font-bold');
                if (totalPriceEl) totalPriceEl.textContent = Number(totalPrice).toLocaleString();
            } else {
                priceSection.classList.add('hidden');
            }
        }
    }

    /* ======== پیام نمایش ======== */
    function showAlert(message, type) {
        document.querySelectorAll('.custom-alert').forEach(a => a.remove());
        const alertDiv = document.createElement('div');
        alertDiv.className = `custom-alert fixed top-20 right-4 z-50 p-4 rounded-lg text-white ${
            type === 'success' ? 'bg-green-500' : 'bg-red-500'
        }`;
        alertDiv.innerHTML = `<div class="flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>${message}</span></div>`;
        document.body.appendChild(alertDiv);
        setTimeout(() => alertDiv.remove(), 3000);
    }

    /* ======== اشتراک‌گذاری ======== */
    window.openShareModal = function (url, title) {
        document.getElementById('shareModal')?.classList.remove('hidden');
        document.getElementById('shareTelegram').href = `https://t.me/share/url?url=${url}&text=${title}`;
        document.getElementById('shareWhatsapp').href = `https://wa.me/?text=${title}%20${url}`;
        document.getElementById('shareTwitter').href = `https://twitter.com/intent/tweet?text=${title}&url=${url}`;
    };

    window.closeShareModal = function () {
        document.getElementById('shareModal')?.classList.add('hidden');
    };

    /* ======== فرم نظرات ======== */
    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
        reviewForm.addEventListener('submit', e => {
            e.preventDefault();
            const formData = new FormData(reviewForm);
            const recommend = document.querySelector('input[name="recommend"]:checked');
            if (recommend) formData.set('recommend', recommend.value);

            fetch(reviewStoreUrl, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': csrfToken },
                body: formData
            })
                .then(res => res.json())
                .then(response => {
                    if (response.success) {
                        alert(response.message);
                        reviewForm.reset();
                        document.getElementById('recommend_yes').checked = true;
                        const commentsContainer = document.querySelector('.lg\\:w-9\\/12');
                        if (commentsContainer) {
                            const newComment = document.createElement('div');
                            newComment.classList.add('px-2', 'pt-5');
                            newComment.innerHTML = `
                            <div class="text-lg text-zinc-700">${formData.get('comment')}</div>
                            <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                                <div class="text-xs text-zinc-600">الان</div>
                                <div class="text-xs text-zinc-600">شما</div>
                                <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">خریدار</div>
                            </div>
                            <div class="flex items-center gap-x-1 pt-3">
                                ${recommend.value == 1 ? '<div class="text-sm text-green-500">پیشنهاد می‌شود</div>' : '<div class="text-sm text-red-500">پیشنهاد نمی‌شود</div>'}
                            </div>
                            <div class="mt-2 text-zinc-600 text-sm">امتیاز: ${formData.get('rating')}/5</div>`;
                            commentsContainer.prepend(newComment);
                        }
                        document.getElementById('satisfactionPercent').innerText = response.recommend_percent + '%';
                    } else {
                        alert(response.error || 'خطا در ثبت نظر');
                    }
                })
                .catch(() => alert('خطا در ارتباط با سرور'));
        });
    }

    /* ======== ستاره‌ها ======== */
    const stars = document.querySelectorAll('#ratingStars .star');
    const ratingValue = document.getElementById('ratingValue');
    let selectedRating = 0;
    if (stars.length) {
        stars.forEach(star => {
            star.addEventListener('mouseover', () => highlightStars(star.dataset.value));
            star.addEventListener('mouseleave', () => highlightStars(selectedRating));
            star.addEventListener('click', () => {
                selectedRating = star.dataset.value;
                ratingValue.value = selectedRating;
                highlightStars(selectedRating);
            });
        });
    }
    function highlightStars(rating) {
        stars.forEach(star => {
            star.style.color = star.dataset.value <= rating ? '#facc15' : '#d1d5db';
        });
    }

    window.toggleFavorite = function (event, productId) {
        event.preventDefault(); // از رفرش یا کلیک پیش‌فرض جلوگیری کن

        const button = event.currentTarget;
        const svg = button.querySelector('svg');

        fetch(`/favorites/toggle/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'added') {
                    svg.classList.remove('fill-zinc-400', 'group-hover:fill-red-500', 'transition-colors');
                    svg.classList.add('fill-red-500');
                } else if (data.status === 'removed') {
                    svg.classList.remove('fill-red-500');
                    svg.classList.add('fill-zinc-400', 'group-hover:fill-red-500', 'transition-colors');
                }
            })
            .catch(err => {
                console.error('خطا در علاقه‌مندی:', err);
                alert('خطا در انجام عملیات.');
            });
    };
    /* ======== اسلایدر ======== */
    if (typeof Swiper !== 'undefined') {
        new Swiper('.productSlider1', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 15 },
                768: { slidesPerView: 3, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 25 },
            },
        });
    }

    /* ======== استایل لودر ======== */
    const style = document.createElement('style');
    style.textContent = `
    .loader {
        width: 16px;
        height: 16px;
        border: 2px solid #fff;
        border-bottom-color: transparent;
        border-radius: 50%;
        display: inline-block;
        animation: rotation 1s linear infinite;
        margin-right: 6px;
    }
    @keyframes rotation {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }`;
    document.head.appendChild(style);
});
