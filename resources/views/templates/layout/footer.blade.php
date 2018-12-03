<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<footer>
    <div class="container max">
        <div class="row footer">
            <div class="col-md-8 col-large-8">
                <div class="row">
                    <div class="col-md-6  col-large-6">
                        <div class="logo">
                            <img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}">
                            <p>{{$setting->fax}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-large-6 info">
                        <h4>{{$setting->company}}</h4>
                        <p>Địa chỉ: {{$setting->address}}<br>
                           Phone: {{$setting->phone}}<br>
                           Email: {{$setting->email}}<br>
                           Website : {{$setting->website}}
                        </p>
                    </div>
                    <div class="col-md-12 col-large-12 map">
                        {!! $setting->iframemap !!}
                    </div>
                </div>
                
            </div>
            
            <div class="col-md-4 col-large-4">
                <h4 style="color:#fff; font-size: 20px; text-transform: uppercase;">Fanpage</h4>
                <div class="page">
                    <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="350" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/noithaththome/" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}"></a></blockquote></div>
                </div>
            </div>
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        </div>
    </div>
</footer>