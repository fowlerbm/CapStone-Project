@include('app')




<div id="SearchContainer">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Games">Games</a></li>
            <li><a data-toggle="tab" href="#Tags">Tags</a></li>
            <li><a data-toggle="tab" href="#Users">Users</a></li>
        </ul>

        <div class="tab-content">
            <div id="Games" class="tab-pane fade in active">
                <h3>Games</h3>
                @foreach($result as $results)
                    <div>
                        <h3>{{ $result->title }}</h3>
                        <p>{{ $result->description }}</p>
                    </div>
                @endforeach
            </div>
            <div id="Tags" class="tab-pane fade">
                <h3>Tags</h3>
                @foreach($TagResults as $results)
                    <div>
                        <h3>{{ $result->name }}</h3>
                    </div>
                @endforeach
            </div>
            <div id="Users" class="tab-pane fade">
                <h3>Users</h3>
                @foreach($UserResults as $results)
                    <div>
                        <h3>{{ $result->username }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>