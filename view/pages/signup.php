<div class="form"></div>
<header class="body__header">
    <h1 class="header__title">Sing-up Form</h1>
    <p class="header__quote quote">From closet to cliff, your coat hanger’s next big move starts here.</p>
</header>
<main class="body__main">
    <section class="main__section">
        <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors)) {
            var_dump($errors);
        }
        ?>
        <form class="section__form" id="signup" action="index.php?page=signup" method="post">
            <input type="hidden" name="action" value="add_contestent" class="form--add">
            <section class="form__personal">
                <label class="personal__name">Name
                    <input class="personal__input input" type="text" name="name" id="name" placeholder="Messner"
                        required>
                    <span class="error"><?php if(!empty($errors['name'])){ echo $errors['name'];} ?>&nbsp;</span>
                </label>
                <label class="personal__firstname">Firstname
                    <input class="personal__input input" type="text" name="firstname" id="firstname"
                        placeholder="Reinhold" required>
                    <span
                        class="error"><?php if(!empty($errors['firstname'])){ echo $errors['firstname'];} ?>&nbsp;</span>
                </label>
                <label class="personal__nickname">Nickname
                    <input class="personal__input input" type="text" name="nickname" id="nickname"
                        placeholder="Border Crosser" required>
                    <span
                        class="error"><?php if(!empty($errors['nickname'])){ echo $errors['nickname'];} ?>&nbsp;</span>
                </label>
            </section>
            <section class="form__contact">
                <label class="contact__email">Email
                    <input class="contact__input input" type="email" name="email"
                        placeholder="messner.reinhold@gmail.com" required>
                    <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?>&nbsp;</span>
                </label>
                <label class="contact__phone">Phone
                    <input class="contact__input input" type="tel" pattern="^\+?[0-9\s\-]{7,15}$" name="phone"
                        placeholder="0456 76 89 34" max="10" required>
                    <span class="error"><?php if(!empty($errors['email'])){ echo $errors['email'];} ?>&nbsp;</span>
                </label>
            </section>
            <section class="form__experience">
                <p class="experience__title">Climbing Experience</p>
                <div class="experience__options">
                    <label>
                        <input class="options__radio" type="radio" name="experience" value="1" required>
                        <span class="option__name">Beginner</span>
                    </label>
                    <label>
                        <input class="options__radio" type="radio" name="experience" value="2">
                        <span class="option__name">Intermediate</span>
                    </label>
                    <label>
                        <input class="options__radio" type="radio" name="experience" value="3">
                        <span class="option__name">Professional</span>
                    </label>
                </div>
                <span class="error"
                    id="experience-error"><?php if(!empty($errors['experience'])){ echo $errors['experience'];} ?>&nbsp;</span>
            </section>
            <section class="form__sumbit">
                <button type="submit" class="submit__button button">Sing up</button>
                <a class="submit__back" href="index.php?page=home">Cancel</a>
            </section>
        </form>
        <div class="section__success hidden">
            <img class="success__image" src="assets/check.svg" alt="check mark">
        </div>
    </section>
    <aside class="main__aside">
        <img class="aside__image" src="assets/grappling-hook.svg"
            alt="grappling hook hanging on to the information below">
        <div class="aside__information">
            <h2 class="information__title">General Information</h2>
            <p class="information__description">We’ll email any important info not shown on the site. Use a valid email
                for updates, schedules, and surprises. You can add a legendary nickname for the leaderboard if you want.
            </p>
            <p class="information__description">Your phone number is only used for urgent contact. Share your experience
                level so we can group you with climbers at a similar level. No one gets left hanging.</p>
        </div>
    </aside>
</main>
<footer class="body__footer">
    <img src="assets/background-image.svg" alt="height map pattern">
</footer>