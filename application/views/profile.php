<div class="section-body">
    <h2 class="section-title">Hi, <?php echo ucfirst($this->fungsi->user_login()->name) ?>!</h2>
    <p class="section-lead">
        Information about your account
    </p>

    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="assets/img/avatar/avatar-6.png" class="rounded-circle profile-widget-picture">
                </div>
                <div class="profile-widget-description">
                    <div class="profile-widget-name"><?php echo ucfirst($this->fungsi->user_login()->name) ?> <div class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div> <?php echo ucfirst($this->fungsi->user_login()->username) ?>
                        </div>
                    </div>
                    <?php echo ucfirst($this->fungsi->user_login()->name) ?> is a administrator in <b>Service Book site</b>, service book save data about item from <b>'Wilmar Group Pelintung'</b>.
                </div>
            </div>
        </div>
    </div>
</div>