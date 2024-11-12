@extends('layout.master')
@section('title', 'Tabs')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Tabs</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Tabs</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Tabs start -->
        <div class="row app-tabs-section">
            <!-- Tab 1 -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header code-header">
                        <h5>Basic Tabs</h5>
                        <a data-bs-toggle="collapse" href="#tab1" aria-expanded="false" aria-controls="tab1">
                            <i class="ti ti-code source" data-source="t1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs app-tabs-primary" id="Basic" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-tab" data-bs-toggle="tab"
                                        data-bs-target="#html-tab-pane" type="button" role="tab" aria-controls="html-tab-pane"
                                        aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="css-tab" data-bs-toggle="tab" data-bs-target="#css-tab-pane"
                                        type="button" role="tab" aria-controls="css-tab-pane" aria-selected="false">CSS</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane"
                                        type="button" role="tab" aria-controls="php-tab-pane" aria-selected="false">PHP</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="BasicContent">
                            <div class="tab-pane fade show active" id="html-tab-pane" role="tabpanel"
                                 aria-labelledby="html-tab" tabindex="0">
                                <p class="mb-0">Hypertext Markup Language is the standard markup language for documents designed to be
                                    displayed in a web browser.</p>
                                <p class="mb-0">It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting
                                    languages such as JavaScript.</p>
                            </div>
                            <div class="tab-pane fade" id="css-tab-pane" role="tabpanel" aria-labelledby="css-tab"
                                 tabindex="0">
                                <p class="mb-0">Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation
                                    of a document written in a markup language like HTML.</p>
                                <p class="mb-0">CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.</p>
                            </div>
                            <div class="tab-pane fade" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab"
                                 tabindex="0">
                                <p class="mb-0">PHP is a popular general-purpose scripting language that is especially suited to web
                                    development.</p>
                                <p class="mb-0">It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now
                                    produced by The PHP Group.</p>
                            </div>
                        </div>
                    </div>

                    <pre class="t1 collapse mt-3" id="tab1">
  <code class="language-html">
&lt;div class="card equal-card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Basic Tabs&lt;/h5&gt;
     &lt;/div&gt;
         &lt;div class="card-body"&gt;
   &lt;ul class="nav nav-tabs app-tabs-primary" id="Basic" role="tablist"&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link active" id="html-tab" data-bs-toggle="tab"
      data-bs-target="#html-tab-pane" type="button" role="tab" aria-controls="html-tab-pane"
      aria-selected="true"&gt;HTML&lt;/button&gt;
    &lt;/li&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link" id="css-tab" data-bs-toggle="tab" data-bs-target="#css-tab-pane"
      type="button" role="tab" aria-controls="css-tab-pane" aria-selected="false"&gt;CSS&lt;/button&gt;
    &lt;/li&gt;
    &lt;li class="nav-item" role="presentation"&gt;
     &lt;button class="nav-link" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane"
      type="button" role="tab" aria-controls="php-tab-pane" aria-selected="false"&gt;PHP&lt;/button&gt;
    &lt;/li&gt;
   &lt;/ul&gt;
   &lt;div class="tab-content" id="BasicContent"&gt;
    &lt;div class="tab-pane fade show active" id="html-tab-pane" role="tabpanel"
     aria-labelledby="html-tab" tabindex="0"&gt;
     &lt;p&gt;Hypertext Markup Language is the standard markup language for documents designed to be
      displayed in a web browser.&lt;/p&gt;
     &lt;p&gt;It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting
      languages such as JavaScript.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="css-tab-pane" role="tabpanel" aria-labelledby="css-tab"
     tabindex="0"&gt;
     &lt;p&gt;Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation
      of a document written in a markup language like HTML.&lt;/p&gt;
     &lt;p&gt;CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab"
     tabindex="0"&gt;
     &lt;p&gt;PHP is a popular general-purpose scripting language that is especially suited to web
      development.&lt;/p&gt;
     &lt;p&gt;It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now
      produced by The PHP Group.&lt;/p&gt;
      &lt;/div&gt;
     &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                </div>
            </div>

            <!-- Tab 2 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Outline Tabs</h5>
                        <a data-bs-toggle="collapse" href="#tab2" aria-expanded="false" aria-controls="tab2">
                            <i class="ti ti-code source" data-source="t2"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
                                        data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
                                        aria-selected="true">Connect</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="discover-tab" data-bs-toggle="tab"
                                        data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
                                        aria-selected="false">Discover</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
                                        type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false">Orders</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="OutlineContent">
                            <div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
                                 aria-labelledby="connect-tab" tabindex="0">
                                <h6 class="mb-1">This is the content of tab one.</h6>
                                <p class="mb-0">This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                    accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
                                    Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.</p>
                            </div>
                            <div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
                                 tabindex="0">
                                <h6 class="mb-1">This is the content of tab two.</h6>
                                <p class="mb-0">This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                    accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
                                    Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.</p>
                            </div>
                            <div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
                                 tabindex="0">
                                <h6 class="mb-1">This is the content of tab three.</h6>
                                <p class="mb-0">This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                    accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
                                    Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.</p>
                            </div>
                        </div>
                    </div>

                    <pre class="t2 collapse mt-3" id="tab2">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header code-header"&gt;
    &lt;h5&gt;Outline Tabs&lt;/h5&gt;
      &lt;a data-bs-toggle="collapse" href="#tab2" aria-expanded="false" aria-controls="tab2"&gt;
        &lt;i class="ti ti-code source" data-source="t2"&gt;&lt;/i&gt;
        &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
         data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
         aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
         data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
         aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
        &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
         type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
        aria-labelledby="connect-tab" tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
        tabindex="0"&gt;
        &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
        &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
         accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
         Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                </div>
            </div>

            <!-- Tab 3 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Light Tabs</h5>
                        <a data-bs-toggle="collapse" href="#tab3" aria-expanded="false" aria-controls="tab3">
                            <i class="ti ti-code source" data-source="t3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-light-primary" id="Light" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description-tab-pane" type="button" role="tab"
                                        aria-controls="description-tab-pane" aria-selected="true"> <i
                                        class="ti ti-lifebuoy pe-1 ps-1"></i>
                                    Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="howowrk-tab" data-bs-toggle="tab"
                                        data-bs-target="#howowrk-tab-pane" type="button" role="tab" aria-controls="howowrk-tab-pane"
                                        aria-selected="false"> <i class="ti ti-keyboard-show pe-1 ps-1"></i> How It Works</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="drawbacks-tab" data-bs-toggle="tab"
                                        data-bs-target="#drawbacks-tab-pane" type="button" role="tab"
                                        aria-controls="drawbacks-tab-pane" aria-selected="false"><i
                                        class="ti ti-file-dislike pe-1 ps-1"></i>Drawbacks</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="LightContent">
                            <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                                 aria-labelledby="description-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="howowrk-tab-pane" role="tabpanel" aria-labelledby="howowrk-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="drawbacks-tab-pane" role="tabpanel" aria-labelledby="drawbacks-tab"
                                 tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>

                    <pre class="t3 collapse mt-3" id="tab3">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Outline Tabs&lt;/h5&gt;
       &lt;/div&gt;
        &lt;div class="card-body"&gt;
         &lt;ul class="nav nav-tabs tab-outline-primary" id="Outline" role="tablist"&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link active" id="connect-tab" data-bs-toggle="tab"
            data-bs-target="#connect-tab-pane" type="button" role="tab" aria-controls="connect-tab-pane"
            aria-selected="true"&gt;Connect&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link" id="discover-tab" data-bs-toggle="tab"
            data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
            aria-selected="false"&gt;Discover&lt;/button&gt;
          &lt;/li&gt;
          &lt;li class="nav-item" role="presentation"&gt;
           &lt;button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane"
            type="button" role="tab" aria-controls="order-tab-pane" aria-selected="false"&gt;Orders&lt;/button&gt;
          &lt;/li&gt;
         &lt;/ul&gt;
         &lt;div class="tab-content" id="OutlineContent"&gt;
          &lt;div class="tab-pane fade show active" id="connect-tab-pane" role="tabpanel"
           aria-labelledby="connect-tab" tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab one.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
           tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab two.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
           tabindex="0"&gt;
           &lt;h6 class="mb-1"&gt;This is the content of tab three.&lt;/h6&gt;
           &lt;p&gt;This field is a rich HTML field with a content editor like others used in Sitefinity. It
            accepts images, video, tables, text, etc. Street art polaroid microdosing la croix taxidermy.
            Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                </div>
            </div>

            <!-- tab 4 -->

            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header code-header">
                        <h5>Background Tabs</h5>
                        <a  data-bs-toggle="collapse" href="#tab4"
                            aria-expanded="false" aria-controls="tab4">
                            <i class="ti ti-code source" data-source="t4"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="features-tab" data-bs-toggle="tab"
                                        data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane"
                                        aria-selected="true"> <i class="ti ti-disc pe-1 ps-1"></i> features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="history-tab" data-bs-toggle="tab"
                                        data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane"
                                        aria-selected="false"><i class="ti ti-history pe-1 ps-1"></i>History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
                                        aria-selected="false"><i class="ti ti-star pe-1 ps-1"></i>reviews</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="bgContent">
                            <div class="tab-pane fade show active" id="features-tab-pane" role="tabpanel"
                                 aria-labelledby="features-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab"
                                 tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>

                    <pre class="t4 collapse mt-3" id="tab4">
  <code class="language-html">
&lt;div class="card equal-card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Background Tabs&lt;/h5&gt;
      &lt;/div&gt;
         &lt;div class="card-body"&gt;
          &lt;ul class="nav nav-tabs tab-primary bg-primary p-1" id="bg" role="tablist"&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link active" id="features-tab" data-bs-toggle="tab"
             data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane"
             aria-selected="true"&gt; &lt;i class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt; features&lt;/button&gt;
           &lt;/li&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="history-tab" data-bs-toggle="tab"
             data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane"
             aria-selected="false"&gt;&lt;i class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
           &lt;/li&gt;
           &lt;li class="nav-item" role="presentation"&gt;
            &lt;button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
             data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane"
             aria-selected="false"&gt;&lt;i class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
           &lt;/li&gt;
      <br >
          &lt;/ul&gt;
          &lt;div class="tab-content" id="bgContent"&gt;
           &lt;div class="tab-pane fade show active" id="features-tab-pane" role="tabpanel"
            aria-labelledby="features-tab" tabindex="0"&gt;
            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
             with fragment identifiers to switch between them.&lt;/p&gt;
           &lt;/div&gt;
      <br >
           &lt;div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab"
            tabindex="0"&gt;
            &lt;ol&gt;
             &lt;li&gt;Show only the last tab.&lt;/li&gt;
             &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
             &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
            &lt;/ol&gt;
           &lt;/div&gt;
      <br >
           &lt;div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab"
            tabindex="0"&gt;
            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
             with fragment identifiers to switch between them.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                </div>
            </div>

            <!-- tab 5 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Vertical Tabs Left Side</h5>
                        <a  data-bs-toggle="collapse" href="#tab5"
                            aria-expanded="false" aria-controls="tab5">
                            <i class="ti ti-code source" data-source="t5"></i>
                        </a>
                    </div>
                    <div class="card-body vertical-tab">
                        <ul class="nav nav-tabs app-tabs-secondary " id="v-bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="v-features-tab" data-bs-toggle="tab"
                                        data-bs-target="#v-features-tab-pane" type="button" role="tab"
                                        aria-controls="v-features-tab-pane" aria-selected="true"> <i class="ti ti-disc pe-1 ps-1"></i>
                                    features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="v-history-tab" data-bs-toggle="tab"
                                        data-bs-target="#v-history-tab-pane" type="button" role="tab"
                                        aria-controls="v-history-tab-pane" aria-selected="false"><i
                                        class="ti ti-history pe-1 ps-1"></i>History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="v-reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#v-reviews-tab-pane" type="button" role="tab"
                                        aria-controls="v-reviews-tab-pane" aria-selected="false"><i
                                        class="ti ti-star pe-1 ps-1"></i>reviews</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="v-bgContent">
                            <div class="tab-pane fade show active" id="v-features-tab-pane" role="tabpanel"
                                 aria-labelledby="v-features-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="v-history-tab-pane" role="tabpanel" aria-labelledby="v-history-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="v-reviews-tab-pane" role="tabpanel" aria-labelledby="v-reviews-tab"
                                 tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>

                    <pre class="t5 collapse mt-3" id="tab5">
  <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
    &lt;h5&gt;Vertical Tabs left side&lt;/h5&gt;
      &lt;/div&gt;
         &lt;div class="card-body vertical-tab"&gt;
         &lt;ul class="nav nav-tabs app-tabs-secondary " id="v-bg" role="tablist"&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link active" id="v-features-tab" data-bs-toggle="tab"
          data-bs-target="#v-features-tab-pane" type="button" role="tab"
          aria-controls="v-features-tab-pane" aria-selected="true"&gt; &lt;i class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt;
          features&lt;/button&gt;
         &lt;/li&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link" id="v-history-tab" data-bs-toggle="tab"
          data-bs-target="#v-history-tab-pane" type="button" role="tab"
          aria-controls="v-history-tab-pane" aria-selected="false"&gt;&lt;i
          class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
         &lt;/li&gt;
         &lt;li class="nav-item" role="presentation"&gt;
          &lt;button class="nav-link" id="v-reviews-tab" data-bs-toggle="tab"
          data-bs-target="#v-reviews-tab-pane" type="button" role="tab"
          aria-controls="v-reviews-tab-pane" aria-selected="false"&gt;&lt;i
          class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
         &lt;/li&gt;
      <br >
         &lt;/ul&gt;
         &lt;div class="tab-content" id="v-bgContent"&gt;
         &lt;div class="tab-pane fade show active" id="v-features-tab-pane" role="tabpanel"
          aria-labelledby="v-features-tab" tabindex="0"&gt;
          &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
          identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
          with fragment identifiers to switch between them.&lt;/p&gt;
         &lt;/div&gt;
      <br >
         &lt;div class="tab-pane fade" id="v-history-tab-pane" role="tabpanel" aria-labelledby="v-history-tab"
          tabindex="0"&gt;
          &lt;ol&gt;
          &lt;li&gt;Show only the last tab.&lt;/li&gt;
          &lt;li&gt;If &lt;code&gt;:target&lt;/code&gt; matches a tab, show it and hide all following siblings.&lt;/li&gt;
          &lt;li&gt;Matches a tab, show it and hide all following siblings.&lt;/li&gt;
          &lt;/ol&gt;
         &lt;/div&gt;
      <br >
         &lt;div class="tab-pane fade" id="v-reviews-tab-pane" role="tabpanel" aria-labelledby="v-reviews-tab"
          tabindex="0"&gt;
          &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
          identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
          with fragment identifiers to switch between them.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

  </code>
</pre>
                </div>
            </div>

            <!-- tab 6  -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header code-header">
                        <h5>Vertical Tabs Right Side</h5>
                        <a  data-bs-toggle="collapse" href="#tab6"
                            aria-expanded="false" aria-controls="tab6">
                            <i class="ti ti-code source" data-source="t6"></i>
                        </a>
                    </div>
                    <div class="card-body vertical-right-tab">
                        <ul class="nav nav-tabs app-tabs-secondary me-0 ms-3" id="vl-bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="vl-features-tab" data-bs-toggle="tab"
                                        data-bs-target="#vl-features-tab-pane" type="button" role="tab"
                                        aria-controls="vl-features-tab-pane" aria-selected="true"> <i
                                        class="ti ti-disc pe-1 ps-1"></i>
                                    features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vl-history-tab" data-bs-toggle="tab"
                                        data-bs-target="#vl-history-tab-pane" type="button" role="tab"
                                        aria-controls="vl-history-tab-pane" aria-selected="false"><i
                                        class="ti ti-history pe-1 ps-1"></i>History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vl-reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#vl-reviews-tab-pane" type="button" role="tab"
                                        aria-controls="vl-reviews-tab-pane" aria-selected="false"><i
                                        class="ti ti-star pe-1 ps-1"></i>reviews</button>
                            </li>

                        </ul>
                        <div class="tab-content text-sm-end" id="vl-bgContent">
                            <div class="tab-pane fade show active" id="vl-features-tab-pane" role="tabpanel"
                                 aria-labelledby="vl-features-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="vl-history-tab-pane" role="tabpanel"
                                 aria-labelledby="vl-history-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="vl-reviews-tab-pane" role="tabpanel"
                                 aria-labelledby="vl-reviews-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>
                        </div>

                    </div>

                    <pre class="t6 collapse mt-3" id="tab6">
                    <code class="language-html">

                        &lt;div class="card equal-card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Vertical Tabs right side&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body vertical-right-tab"&gt;
                        <br>
                          &lt;ul class="nav nav-tabs app-tabs-secondary me-0 ms-3" id="vl-bg" role="tablist"&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link active" id="vl-features-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-features-tab-pane" type="button" role="tab"
                             aria-controls="vl-features-tab-pane" aria-selected="true"&gt; &lt;i
                              class="ti ti-disc pe-1 ps-1"&gt;&lt;/i&gt;
                             features&lt;/button&gt;
                           &lt;/li&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link" id="vl-history-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-history-tab-pane" type="button" role="tab"
                             aria-controls="vl-history-tab-pane" aria-selected="false"&gt;&lt;i
                              class="ti ti-history pe-1 ps-1"&gt;&lt;/i&gt;History&lt;/button&gt;
                           &lt;/li&gt;
                           &lt;li class="nav-item" role="presentation"&gt;
                            &lt;button class="nav-link" id="vl-reviews-tab" data-bs-toggle="tab"
                             data-bs-target="#vl-reviews-tab-pane" type="button" role="tab"
                             aria-controls="vl-reviews-tab-pane" aria-selected="false"&gt;&lt;i
                              class="ti ti-star pe-1 ps-1"&gt;&lt;/i&gt;reviews&lt;/button&gt;
                           &lt;/li&gt;
                        <br >
                          &lt;/ul&gt;
                          &lt;div class="tab-content text-sm-end" id="vl-bgContent"&gt;
                           &lt;div class="tab-pane fade show active" id="vl-features-tab-pane" role="tabpanel"
                            aria-labelledby="vl-features-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                        <br >
                           &lt;div class="tab-pane fade" id="vl-history-tab-pane" role="tabpanel"
                            aria-labelledby="vl-history-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                        <br >
                           &lt;div class="tab-pane fade" id="vl-reviews-tab-pane" role="tabpanel"
                            aria-labelledby="vl-reviews-tab" tabindex="0"&gt;
                            &lt;p&gt;The idea is to use &lt;code&gt;:target&lt;/code&gt; pseudoclass to show tabs, use anchors with fragment
                             identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                             with fragment identifiers to switch between them.&lt;/p&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                        <br >
                         &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>

            <!-- tab 7 -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Tabs Bottom Side</h5>
                    </div>
                    <div class="card-body bottom-tab">
                        <ul class="nav nav-tabs app-tabs-secondary" id="b-bg" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="b-features-tab" data-bs-toggle="tab"
                                        data-bs-target="#b-features-tab-pane" type="button" role="tab"
                                        aria-controls="b-features-tab-pane" aria-selected="true"> <i class="ti ti-disc pe-1 ps-1"></i>
                                    features</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="b-history-tab" data-bs-toggle="tab"
                                        data-bs-target="#b-history-tab-pane" type="button" role="tab"
                                        aria-controls="b-history-tab-pane" aria-selected="false"><i
                                        class="ti ti-history pe-1 ps-1"></i>History</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="b-reviews-tab" data-bs-toggle="tab"
                                        data-bs-target="#b-reviews-tab-pane" type="button" role="tab"
                                        aria-controls="b-reviews-tab-pane" aria-selected="false"><i
                                        class="ti ti-star pe-1 ps-1"></i>reviews</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="b-bgContent">
                            <div class="tab-pane fade show active" id="b-features-tab-pane" role="tabpanel"
                                 aria-labelledby="b-features-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="b-history-tab-pane" role="tabpanel" aria-labelledby="b-history-tab"
                                 tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="b-reviews-tab-pane" role="tabpanel" aria-labelledby="b-reviews-tab"
                                 tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- tab 8 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Justify Light Tabs</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-light-secondary justify-content-around" id="justify-Light"
                            role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link active w-100" id="justify-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#justify-home-tab-pane" type="button" role="tab"
                                        aria-controls="justify-home-tab-pane" aria-selected="true"> <i
                                        class="ti ti-lifebuoy pe-1 ps-1"></i> Home</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="justify-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#justify-profile-tab-pane" type="button" role="tab"
                                        aria-controls="justify-profile-tab-pane" aria-selected="false"> <i
                                        class="ti ti-keyboard-show pe-1 ps-1"></i> Profile </button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="justify-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#justify-contact-tab-pane" type="button" role="tab"
                                        aria-controls="justify-contact-tab-pane" aria-selected="false"><i
                                        class="ti ti-file-dislike pe-1 ps-1"></i>Contact</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="justify-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#justify-about-tab-pane" type="button" role="tab"
                                        aria-controls="justify-about-tab-pane" aria-selected="false"><i
                                        class="ti ti-ball-basketball pe-1 ps-1"></i>About</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="justify-LightContent">
                            <div class="tab-pane fade show active" id="justify-home-tab-pane" role="tabpanel"
                                 aria-labelledby="justify-home-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="justify-profile-tab-pane" role="tabpanel"
                                 aria-labelledby="justify-profile-tab" tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="justify-contact-tab-pane" role="tabpanel"
                                 aria-labelledby="justify-contact-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="justify-about-tab-pane" role="tabpanel"
                                 aria-labelledby="justify-about-tab" tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- tab 9 -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Image As Nav Link</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-light-secondary" id="lang-Light" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gap-2 active" id="lang-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#lang-home-tab-pane" type="button" role="tab"
                                        aria-controls="lang-home-tab-pane" aria-selected="true">
                                    <i class="flag-icon flag-icon-usa"></i>
                                    USA
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gap-2" id="lang-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#lang-profile-tab-pane" type="button" role="tab"
                                        aria-controls="lang-profile-tab-pane" aria-selected="false">
                                    <i class="flag-icon flag-icon-gbr"></i>
                                    GBR
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gap-2" id="lang-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#lang-contact-tab-pane" type="button" role="tab"
                                        aria-controls="lang-contact-tab-pane" aria-selected="false">
                                    <i class="flag-icon flag-icon-deu"></i>
                                    DEU
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gap-2" id="lang-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#lang-about-tab-pane" type="button" role="tab"
                                        aria-controls="lang-about-tab-pane" aria-selected="false">
                                    <i class="flag-icon flag-icon-lbr"></i>
                                    LBR
                                </button>
                            </li>

                        </ul>
                        <div class="tab-content" id="lang-LightContent">
                            <div class="tab-pane fade show active" id="lang-home-tab-pane" role="tabpanel"
                                 aria-labelledby="lang-home-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="lang-profile-tab-pane" role="tabpanel"
                                 aria-labelledby="lang-profile-tab" tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="lang-contact-tab-pane" role="tabpanel"
                                 aria-labelledby="lang-contact-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="lang-about-tab-pane" role="tabpanel"
                                 aria-labelledby="lang-about-tab" tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- tab 10 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Some Implements</h5>
                    </div>
                    <div class="card-body iplements-tabs">
                        <ul class="nav nav-tabs tab-light-secondary" id="testi-Light" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link gap-2 d-flex active" id="testi-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#testi-home-tab-pane" type="button" role="tab"
                                        aria-controls="testi-home-tab-pane" aria-selected="true">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                          </span>
                                    <span>
                            <span class="text-body d-block text-start f-s-16 f-w-600 text-dark mb-0">Guthry </span>
                            <span class="text-start m-0">Sales Manager</span>
                          </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex gap-2" id="testi-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#testi-profile-tab-pane" type="button" role="tab"
                                        aria-controls="testi-profile-tab-pane" aria-selected="false">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                          </span>
                                    <span>
                            <span class="text-body d-block text-start mb-0 f-s-16 f-w-600 text-dark">Olive Yew </span>
                            <span class="text-start m-0">account Manager</span>
                          </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex gap-2" id="testi-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#testi-contact-tab-pane" type="button" role="tab"
                                        aria-controls="testi-contact-tab-pane" aria-selected="false">
                          <span class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                            <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                          </span>
                                    <span>
                            <span class="text-body d-block text-start f-s-16 f-w-600 text-dark mb-0">Lily </span>
                            <span class="text-start m-0">Manager</span>
                          </span>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="testi-LightContent">
                            <div class="tab-pane fade show active" id="testi-home-tab-pane" role="tabpanel"
                                 aria-labelledby="testi-home-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                            <div class="tab-pane fade" id="testi-profile-tab-pane" role="tabpanel"
                                 aria-labelledby="testi-profile-tab" tabindex="0">
                                <ol>
                                    <li>Show only the last tab.</li>
                                    <li>If <code>:target</code> matches a tab, show it and hide all following siblings.</li>
                                    <li>Matches a tab, show it and hide all following siblings.</li>
                                </ol>
                            </div>

                            <div class="tab-pane fade" id="testi-contact-tab-pane" role="tabpanel"
                                 aria-labelledby="testi-contact-tab" tabindex="0">
                                <p class="mb-0">The idea is to use <code>:target</code> pseudoclass to show tabs, use anchors with fragment
                                    identifiers to switch between them. The idea is to use pseudoclass to show tabs, use anchors
                                    with fragment identifiers to switch between them.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tabs end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
