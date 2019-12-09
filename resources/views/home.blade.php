@extends('layouts.dclm')

@section('page-header')
<div class="hero-body">
  <div class="level">
      <div class="level-left">
          <div class="level-item is-hero-avatar-item">
              <div class="image is-user-avatar">
                  <img src="/data-sources/avatars/annie-spratt-121576-unsplash.jpg">
              </div>
          </div>
          <div class="level-item is-hero-content-item">
              <div>
                  <h1 class="title is-spaced">Howdy, <b>John Doe</b></h1>
                  <h3 class="subtitle">Last login <b>12 mins ago</b> from <b>192.168.1.1</b></h3>
                  <p>You have <b>6 tasks</b> due today and <b>84 inquiries</b></p>
              </div>
          </div>
      </div>
      <div class="level-right">
          <div class="level-item">
              <a href="#/profile" class="button is-light" title="Profile">
                  <span class="icon">
                      <i class="mdi mdi-account default"></i>
                  </span>
              </a>
          </div>
      </div>
  </div>
</div>
@endsection
@section('content')
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <div class="card is-card-widget tile is-child">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon">
                        <i class="mdi mdi-arrow-up-bold default"></i>
                    </span>
                    <span><b>384</b> in <b>July, 2019</b></span></p>
                    <button type="button" class="button is-small">
                        <span class="icon">
                            <i class="mdi mdi-settings default"></i>
                        </span>
                    </button>
            </header>
            <div class="card-content">
                <div class="level is-mobile">
                    <div class="level-item">
                        <div class="is-widget-label">
                            <h3 class="subtitle is-spaced">
                                Clients
                            </h3>
                            <h1 class="title">
                                <div>512</div>
                            </h1>
                        </div>
                    </div>
                    <div class="level-item has-widget-icon">
                        <div class="is-widget-icon">
                            <span class="icon has-text-primary is-large">
                                <i class="mdi mdi-account-multiple mdi-48px"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tile is-parent">
        <div class="card is-card-widget tile is-child">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon">
                        <i class="mdi mdi-arrow-up-bold default"></i>
                    </span>
                    <span><b>$7,000</b> in <b>July, 2019</b></span>
                </p>
                <button type="button" class="button is-small">
                    <span class="icon">
                        <i class="mdi mdi-settings default"></i>
                    </span>
                </button>
            </header>
            <div class="card-content">
                <div class="level is-mobile">
                    <div class="level-item">
                        <div class="is-widget-label">
                            <h3 class="subtitle is-spaced">
                                Sales
                            </h3>
                            <h1 class="title">
                                <div>$7,770</div>
                            </h1>
                        </div>
                    </div>
                    <div class="level-item has-widget-icon">
                        <div class="is-widget-icon">
                            <span class="icon has-text-info is-large">
                                <i class="mdi mdi-cart-outline mdi-48px"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tile is-parent">
        <div class="card is-card-widget tile is-child">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon">
                        <i class="mdi mdi-arrow-down-bold default"></i>
                    </span>
                    <span><b>384%</b> in <b>July, 2019</b></span>
                </p>
                <button type="button" class="button is-small">
                    <span class="icon">
                        <i class="mdi mdi-settings default"></i>
                    </span>
                </button>
            </header>
            <div class="card-content">
                <div class="level is-mobile">
                    <div class="level-item">
                        <div class="is-widget-label">
                            <h3 class="subtitle is-spaced">
                                Performance
                            </h3>
                            <h1 class="title">
                                <div>256%</div>
                            </h1>
                        </div>
                    </div>
                    <div class="level-item has-widget-icon">
                        <div class="is-widget-icon">
                            <span class="icon has-text-success is-large">
                                <i class="mdi mdi-chart-timeline-variant mdi-48px"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tile is-parent"><div class="card is-card-widget tile is-child"><header class="card-header"><p class="card-header-title"><span class="icon"><i class="mdi mdi-arrow-down-bold default"></i></span><span><b>64</b> in <b>July, 2019</b></span></p><button type="button" class="button is-small"><span class="icon"><i class="mdi mdi-settings default"></i></span></button></header><div class="card-content"><div class="level is-mobile"><div class="level-item"><div class="is-widget-label"><h3 class="subtitle is-spaced">
          Alerts
        </h3><h1 class="title"><div>
  32
</div></h1></div></div><div class="level-item has-widget-icon"><div class="is-widget-icon"><span class="icon has-text-danger is-large"><i class="mdi mdi-bell mdi-48px"></i></span></div></div></div></div></div></div></div><div class="card"><header class="card-header"><p class="card-header-title"><span class="icon"><i class="mdi mdi-finance default"></i></span><span>Performance</span></p><a href="#" aria-label="more options" class="card-header-icon"><span class="icon"><i class="mdi mdi-reload default"></i></span></a></header><div class="card-content"><div class="chart-area"><div class="" style="height: 100%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas id="big-line-chart" width="1258" height="400" style="display: block; width: 1258px; height: 400px;" class="chartjs-render-monitor"></canvas></div></div></div></div><div class="columns is-desktop"><div class="column"><div class="card has-height-medium"><header class="card-header"><p class="card-header-title"><span class="icon"><i class="mdi mdi-comment-multiple-outline default"></i></span><span>Recent Comments</span></p><button type="button" class="button is-small"><span class="icon"><i class="mdi mdi-refresh default"></i></span><span>Refresh</span></button></header><div class="notification is-card-toolbar is-upper"><div class="level"><div class="level-left"><div class="level-item"><div>Something important to note</div></div></div><div class="level-right"><div class="level-item"><span class="tag is-warning"><span>Warning</span></span></div></div></div></div><div class="card-content ps ps--active-y"><div class="media-list"><article class="media"><figure class="media-left"><p class="image is-64x64"><img src="/data-sources/avatars/joshua-rawson-harris-432289-unsplash.jpg" class="is-rounded"></p></figure><div class="media-content"><div class="content"><p class="media-meta"><strong>Lon Dach</strong><small>@tia79</small><small class="has-text-grey">3 months ago</small></p><p>
        Rerum eos et quo tenetur et. Qui voluptatum inventore voluptate. Non repudiandae dolorum necessitatibus voluptatem et. Atque ut nam voluptatem ea.
      </p></div><nav class="level is-mobile"><div class="level-left"><a class="level-item"><span class="icon"><i class="mdi mdi-reply default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-twitter-retweet default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-heart-outline default"></i></span></a></div></nav></div></article><article class="media"><figure class="media-left"><p class="image is-64x64"><img src="/data-sources/avatars/andy-lee-642320-unsplash.jpg" class="is-rounded"></p></figure><div class="media-content"><div class="content"><p class="media-meta"><strong>Zane Marvin</strong><small>@gmayer</small><small class="has-text-grey">3 months ago</small></p><p>
        Natus sunt ut ipsam fuga non esse quod. Dolores odio ut saepe eum sequi aut impedit quaerat. Quaerat praesentium vero culpa accusamus quas.
      </p></div><nav class="level is-mobile"><div class="level-left"><a class="level-item"><span class="icon"><i class="mdi mdi-reply default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-twitter-retweet default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-heart-outline default"></i></span></a></div></nav></div></article><article class="media"><figure class="media-left"><p class="image is-64x64"><img src="/data-sources/avatars/nicolas-horn-689011-unsplash.jpg" class="is-rounded"></p></figure><div class="media-content"><div class="content"><p class="media-meta"><strong>Kaelyn Gorczany</strong><small>@gaylord.myriam</small><small class="has-text-grey">3 months ago</small></p><p>
        Sed voluptas aut atque nemo. Laboriosam magnam vel sit sit temporibus optio debitis. Et quae eaque culpa ea sint aut vero dicta. Enim velit aperiam magni qui est ratione qui.
      </p></div><nav class="level is-mobile"><div class="level-left"><a class="level-item"><span class="icon"><i class="mdi mdi-reply default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-twitter-retweet default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-heart-outline default"></i></span></a></div></nav></div></article><article class="media"><figure class="media-left"><p class="image is-64x64"><img src="/data-sources/avatars/joshua-rawson-harris-432289-unsplash.jpg" class="is-rounded"></p></figure><div class="media-content"><div class="content"><p class="media-meta"><strong>Rebecca Bauch</strong><small>@helga.pfannerstill</small><small class="has-text-grey">3 months ago</small></p><p>
        Id consequatur voluptate odio et qui sapiente est. Assumenda sed quos et vel molestias.
      </p></div><nav class="level is-mobile"><div class="level-left"><a class="level-item"><span class="icon"><i class="mdi mdi-reply default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-twitter-retweet default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-heart-outline default"></i></span></a></div></nav></div></article><article class="media"><figure class="media-left"><p class="image is-64x64"><img src="/data-sources/avatars/freestocks-org-190062-unsplash.jpg" class="is-rounded"></p></figure><div class="media-content"><div class="content"><p class="media-meta"><strong>Jonathon Hahn</strong><small>@queen33</small><small class="has-text-grey">3 months ago</small></p><p>
        Quia exercitationem debitis cum eos consequuntur exercitationem debitis. Esse ipsa tempore consequuntur.
      </p></div><nav class="level is-mobile"><div class="level-left"><a class="level-item"><span class="icon"><i class="mdi mdi-reply default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-twitter-retweet default"></i></span></a><a class="level-item"><span class="icon"><i class="mdi mdi-heart-outline default"></i></span></a></div></nav></div></article></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 502px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 303px;"></div></div></div><footer class="card-footer"><a class="card-footer-item"><span class="icon"><i class="mdi mdi-autorenew default"></i></span><span>Load more</span></a></footer></div></div><div class="column"><div class="card has-height-medium"><header class="card-header"><p class="card-header-title"><span class="icon"><i class="mdi mdi-animation-outline default"></i></span><span>Updates</span></p><button type="button" class="button is-small"><span class="icon"><i class="mdi mdi-refresh default"></i></span><span>Refresh</span></button></header><div class="notification is-card-toolbar is-upper"><div class="level"><div class="level-left"><div class="level-item"><div>You're up to date :-)</div></div></div><div class="level-right"><div class="level-item"><span class="tag is-success"><span>All done</span></span></div></div></div></div><div class="card-content ps ps--active-y"><div class="media-list"><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Alvena Rohan</strong><small>@hoeger.kelli</small><small class="has-text-grey">3 months ago</small></p><p>
        Eum rerum nam corporis neque ea. Eaque ut est id nesciunt earum. Quia dolores qui quia quae modi deleniti non. Blanditiis molestiae debitis laborum incidunt.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Kaelyn Gorczany</strong><small>@gaylord.myriam</small><small class="has-text-grey">3 months ago</small></p><p>
        Et dolor dolor non et harum doloribus illum. Minus totam quia omnis. Rerum vel numquam labore alias exercitationem harum. Iusto ipsum et cupiditate aut tempore rerum sit ipsa.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Mr. Broderick Kub</strong><small>@rita52</small><small class="has-text-grey">3 months ago</small></p><p>
        Sapiente ut harum omnis sit aut earum. Illo quidem harum omnis est autem ut vel suscipit. Consequatur unde doloremque voluptatem voluptatum est omnis cupiditate. Eum explicabo adipisci esse.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Ms. Valentina Braun DDS</strong><small>@michaela.lindgren</small><small class="has-text-grey">3 months ago</small></p><p>
        Qui perferendis voluptas sint quis quo dignissimos dignissimos fugit. Et praesentium aut rerum iusto voluptatem tempore ratione aut. Beatae tempora omnis illo blanditiis veritatis sit qui.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Kenya Steuber</strong><small>@cindy.jaskolski</small><small class="has-text-grey">3 months ago</small></p><p>
        Consequatur non nam totam recusandae alias qui voluptas. Animi doloremque rerum aut. Nulla est eos odio quasi quo tempore esse.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Zane Marvin</strong><small>@gmayer</small><small class="has-text-grey">3 months ago</small></p><p>
        Qui quis incidunt ut rem itaque tempora. Dolores voluptatum similique a est. Ut velit necessitatibus possimus nihil. Quasi ullam perferendis sed ut eaque voluptatem.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Devante Jast</strong><small>@hansen.adrain</small><small class="has-text-grey">3 months ago</small></p><p>
        Ea eveniet corrupti in tenetur quia. Molestiae maiores velit nisi mollitia quis omnis. Et et rerum laboriosam dolorem tenetur harum.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Bonnie Bruen</strong><small>@nikolaus.lauretta</small><small class="has-text-grey">3 months ago</small></p><p>
        Ipsam dolorem ea quia. Rerum iure veniam est exercitationem laboriosam necessitatibus. Eum velit dolor non cupiditate.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Devante Jast</strong><small>@hansen.adrain</small><small class="has-text-grey">3 months ago</small></p><p>
        Dolores accusantium quidem nobis eum enim voluptatem quam. Fugiat rerum aliquam assumenda quia eum et. Sint et sed voluptas quibusdam.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Miss Leatha Shields</strong><small>@kunde.ruthie</small><small class="has-text-grey">3 months ago</small></p><p>
        Qui consectetur sunt et illo est quos quas. Magnam omnis libero totam architecto. Ratione adipisci voluptatem saepe eos.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Johanna Jaskolski V</strong><small>@torp.jaron</small><small class="has-text-grey">3 months ago</small></p><p>
        Veniam fugiat optio ut nulla. Voluptatem maiores explicabo aliquid expedita occaecati. Ad quidem aliquam provident rerum ipsum necessitatibus reprehenderit.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Dr. Kelsi Adams PhD</strong><small>@angelina58</small><small class="has-text-grey">3 months ago</small></p><p>
        Nam est nemo at est dolores libero. Quo aperiam vel aut. Esse eveniet autem eos voluptas. Voluptatem qui quia mollitia eos consectetur blanditiis beatae.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Keshaun Schinner Sr.</strong><small>@uhammes</small><small class="has-text-grey">3 months ago</small></p><p>
        Veritatis quia necessitatibus sequi culpa quibusdam explicabo. Sunt ullam quasi hic beatae sed libero. Exercitationem iusto tempora architecto consequatur et impedit quasi.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Trinity Marquardt MD</strong><small>@kale.daugherty</small><small class="has-text-grey">3 months ago</small></p><p>
        Consequuntur incidunt cum doloribus dignissimos. Cupiditate corrupti cupiditate dignissimos et aut maiores. Ipsum expedita illum vero.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article><article class="media"><div class="media-content"><div class="content"><p class="media-meta"><strong>Miss Leatha Shields</strong><small>@kunde.ruthie</small><small class="has-text-grey">3 months ago</small></p><p>
        Quas amet quam nulla. Modi quia eum laborum autem est aut sapiente. Necessitatibus quidem et animi voluptatem. Quidem nihil eos atque.
      </p></div></div><div class="media-right"><button class="delete"></button></div></article></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 502px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 130px;"></div></div></div><footer class="card-footer"><a class="card-footer-item"><span class="icon"><i class="mdi mdi-autorenew default"></i></span><span>Load more</span></a></footer></div></div></div><div class="card has-table has-mobile-sort-spaced"><header class="card-header"><p class="card-header-title"><span class="icon"><i class="mdi mdi-account-multiple default"></i></span><span>Clients</span></p><button type="button" class="button is-small"><span class="icon"><i class="mdi mdi-refresh default"></i></span><span>Refresh</span></button></header><div class="notification is-card-toolbar"><div class="level"><div class="level-left"><div class="level-item"><div class="buttons has-addons"><button class="button is-active">Active</button><button disabled="disabled" class="button">Recent</button><button disabled="disabled" class="button">Archived</button></div></div></div><div class="level-right"><div class="level-item"><form><div class="field has-addons"><div class="control"><input type="text" placeholder="Sample field..." class="input"></div><div class="control"><button type="submit" class="button is-primary"><span class="icon"><i class="mdi mdi-dots-horizontal default"></i></span></button></div></div></form></div></div></div></div><div class="card-content"><div><div class="b-table"><div class="field table-mobile-sort"><div class="field has-addons"><div class="control is-expanded"><span class="select is-fullwidth"><select>  <option value="[object Object]">
                Name
            </option><option value="[object Object]">
                Company
            </option><option value="[object Object]">
                City
            </option><option value="[object Object]">
                Progress
            </option></select></span> </div> <div class="control"><button class="button is-primary"><span class="icon is-small"><i class="mdi mdi-arrow-up"></i></span></button></div></div></div>  <div class="table-wrapper"><table class="table is-striped has-mobile-cards is-hoverable"><thead><tr>  <th class=""><div class="th-wrap"> <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th><th class="is-current-sort is-sortable"><div class="th-wrap">Name <span class="icon is-small"><i class="mdi mdi-arrow-up"></i></span></div></th><th class="is-sortable"><div class="th-wrap">Company <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th><th class="is-sortable"><div class="th-wrap">City <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th><th class="is-sortable"><div class="th-wrap">Progress <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th><th class=""><div class="th-wrap">Created <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th><th class=""><div class="th-wrap"> <span class="icon is-small" style="display: none;"><i class="mdi mdi-arrow-up"></i></span></div></th> </tr></thead> <tbody><tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/andy-lee-642320-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Alvis Anderson MD
      </td><td data-label="Company" class="">
        Waters Ltd
      </td><td data-label="City" class="">
        South Larissatown
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="41">41</progress></td><td data-label="Created" class=""><small title="Sep 19, 2018" class="has-text-grey is-abbr-like">Sep 19, 2018</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/15" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/andy-lee-642320-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        America Mertz
      </td><td data-label="Company" class="">
        Dickens Inc
      </td><td data-label="City" class="">
        Angusstad
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="63">63</progress></td><td data-label="Created" class=""><small title="Mar 14, 2019" class="has-text-grey is-abbr-like">Mar 14, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/36" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/nicolas-horn-689011-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Augustine Greenholt
      </td><td data-label="Company" class="">
        Streich, Purdy and Friesen
      </td><td data-label="City" class="">
        Port Nikohaven
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="28">28</progress></td><td data-label="Created" class=""><small title="Dec 4, 2018" class="has-text-grey is-abbr-like">Dec 4, 2018</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/16" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/nicolas-horn-689011-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Barry Weber
      </td><td data-label="Company" class="">
        Schulist, Mosciski and Heidenreich
      </td><td data-label="City" class="">
        East Violettestad
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="42">42</progress></td><td data-label="Created" class=""><small title="Jul 24, 2019" class="has-text-grey is-abbr-like">Jul 24, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/19" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/benjamin-parker-699522-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Cathrine Erdman
      </td><td data-label="Company" class="">
        Nolan-Kozey
      </td><td data-label="City" class="">
        West Biankafurt
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="79">79</progress></td><td data-label="Created" class=""><small title="Jan 30, 2019" class="has-text-grey is-abbr-like">Jan 30, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/14" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/freestocks-org-190062-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Cleora Vandervort DDS
      </td><td data-label="Company" class="">
        Shields and Sons
      </td><td data-label="City" class="">
        Port Shannaport
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="15">15</progress></td><td data-label="Created" class=""><small title="Jan 14, 2019" class="has-text-grey is-abbr-like">Jan 14, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/17" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/andy-lee-642320-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Devante Jast
      </td><td data-label="Company" class="">
        Goyette and Sons
      </td><td data-label="City" class="">
        Williamsonfurt
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="38">38</progress></td><td data-label="Created" class=""><small title="Aug 4, 2019" class="has-text-grey is-abbr-like">Aug 4, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/10" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/benjamin-parker-699522-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Domenica Harber
      </td><td data-label="Company" class="">
        Ankunding Inc
      </td><td data-label="City" class="">
        New Gailbury
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="31">31</progress></td><td data-label="Created" class=""><small title="Feb 9, 2019" class="has-text-grey is-abbr-like">Feb 9, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/27" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/benjamin-parker-699522-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Jailyn Reichel
      </td><td data-label="Company" class="">
        O'Reilly and Sons
      </td><td data-label="City" class="">
        West Lydia
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="81">81</progress></td><td data-label="Created" class=""><small title="Aug 4, 2019" class="has-text-grey is-abbr-like">Aug 4, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/6" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  <tr draggable="false" class="">  <td class="has-no-head-mobile is-image-cell"><div class="image"><img src="/data-sources/avatars/nicolas-horn-689011-unsplash.jpg" class="is-rounded"></div></td><td data-label="Name" class="">
        Jarret Lemke
      </td><td data-label="Company" class="">
        Roberts, Gerlach and Runolfsson
      </td><td data-label="City" class="">
        Brettchester
      </td><td data-label="Progress" class="is-progress-col"><progress max="100" class="progress is-small is-primary" value="33">33</progress></td><td data-label="Created" class=""><small title="Jan 20, 2019" class="has-text-grey is-abbr-like">Jan 20, 2019</small></td><td class="is-actions-cell"><div class="buttons is-right"><a href="#/client/44" class="button is-small is-primary"><span class="icon is-small"><i class="mdi mdi-account-edit"></i></span></a><button type="button" class="button is-small is-danger"><span class="icon is-small"><i class="mdi mdi-trash-can"></i></span></button></div></td> </tr>  </tbody> </table></div> <div class="level"><div class="level-left"></div> <div class="level-right"><div class="level-item"><nav class="pagination"><a role="button" href="#" disabled="disabled" class="pagination-link pagination-previous"><span class="icon" aria-hidden="true"><i class="mdi mdi-chevron-left mdi-24px"></i></span></a> <a role="button" href="#" class="pagination-link pagination-next"><span class="icon" aria-hidden="true"><i class="mdi mdi-chevron-right mdi-24px"></i></span></a> <ul class="pagination-list">  <li><a role="button" href="#" aria-current="true" class="pagination-link is-current ">1</a></li><li><a role="button" href="#" class="pagination-link">2</a></li>  </ul></nav></div></div></div></div></div></div></div>
@endsection