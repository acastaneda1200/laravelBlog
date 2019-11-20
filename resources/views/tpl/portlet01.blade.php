<div class="m-portlet m-portlet--info m-portlet--head-solid-bg m-portlet--rounded">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon">
                    <i class="flaticon-calendar"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    {{ $titulo_form }}
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                    {{ $botones }}
                    </li>
              
            </ul>
        </div>
    </div>
    <div class="m-portlet__body">
            {{ $contenido }}
    </div>
</div>