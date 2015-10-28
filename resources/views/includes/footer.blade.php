<div class="footer_site">
    <div class="footer_content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="footer_headline">@lang('application.contactus')</h1>
                    <p>
                        <i class="glyphicon glyphicon-earphone"></i>  @lang('application.telephone')<br />
                        <i class="glyphicon glyphicon-envelope"></i>  info@greenglobale.com
                    </p>
                    <p>
                        @lang('application.contactaddress')
                    </p>
                </div>

                 <div class="col-md-3"><h1 class="footer_headline">MENU</h1>
                    <ul>
                        <li><a href="{{url()}}">HOME</a></li>
                    @foreach($menus as $key=> $menu)
                        <li><a href="{!!$menu->category()->first() ? url('categories/'.$menu->category()->first()->id.'/projects') : $menu->external_url ?:'#'!!}">{!! $menu->translation(Lang::locale())->first() ? $menu->translation(Lang::locale())->first()->title: $menu->title !!}</a></li>
                    @endforeach
                    </ul>
                 </div>
                <div class="col-md-4"><div class="fb-page" data-href="https://www.facebook.com/thephnompenhtime" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/thephnompenhtime"><a href="https://www.facebook.com/thephnompenhtime">The Phnom Penh Times</a></blockquote></div></div></div>
            </div>
        </div>
    </div>

    <div class="box_copy_right">
        @lang('application.copyright')
    </div>
    
</div>