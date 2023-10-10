<div class="get-a-free-quote-section">
    <div class="get-a-free-quote-section-heading">
        <h2>Get A Free Quote</h2>
    </div>
    <div class="get-a-free-quote-section-content">
        <p>Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
        <form action="{{route('user.contact.us.store')}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name"  name="name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="last name"  name="last_name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone no" name="phone" >
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                </div>
            </div>
            <textarea class="form-control" placeholder="Enter your message" rows="5" id="comment" name="message" class="mb-3"></textarea>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <button type="submit">Submit</button>
        </form>

    </div>
</div>
