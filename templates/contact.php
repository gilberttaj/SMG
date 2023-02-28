<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

<form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <input type="hidden" name="action" value="submit_contact_form">
    <input type="submit" value="Send">
</form>
[contact_form]




<?php get_footer(); ?>


