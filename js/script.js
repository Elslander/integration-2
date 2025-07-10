const $form = document.querySelector('form');
const $check = document.querySelector('.section__success');

$form?.addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData($form);

    const res = await fetch('index.php?page=api-create-contestents', {
        method: 'POST',
        body: data
    });

    const json = await res.json();

    console.log(json);

    if ($form.checkValidity()) {
        $check.classList.remove('hidden');
        setTimeout(() => {
            $check.classList.add('hidden');
            $form.reset();
        }, 1500);
    }
});

const init = () => {
    // Alternative uses cards
    const cards = document.querySelectorAll('.list__use');

    cards.forEach(card => {
        const useMoreBtn = card.querySelector('.use__more');
        const closeBtn = card.querySelector('.more__close');

        useMoreBtn?.addEventListener('click', () => {
            cards.forEach(c => c.classList.remove('state-expanded', 'state-collapsed', 'state-normal'));
            cards.forEach(c => {
                if (c !== card) c.classList.add('state-collapsed');
            });
            card.classList.add('state-expanded');
        });

        closeBtn?.addEventListener('click', () => {
            cards.forEach(c => c.classList.remove('state-expanded', 'state-collapsed', 'state-normal'));
            cards.forEach(c => c.classList.add('state-normal'));
        });
    });

    // Event data
    const $eventData = document.querySelector('.event__data');
    $eventData?.innerHTML = '';

    for(let i = 0; i < 10; i++) {
        $eventData?.innerHTML += `
            <p class="event__date">June 15 2025</p>
            <p class="event__time">2 PM</p>
            <p class="event__price">€15 pp</p>
        `;
    }

    // Reviews tab
    const $reviewTab = document.querySelector('.review__tab');
    const $reviewContainer = document.querySelector('.review__tab-container');

    $reviewTab?.addEventListener('click', () => {
        $reviewContainer.classList.toggle('open');
    });
}

init();
