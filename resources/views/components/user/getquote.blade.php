<div class="get-a-free-quote-section" id="inquiry-form">
    <div class="get-a-free-quote-section-heading">
        <h2>Get A Free Quote</h2>


    </div>
    <form action="{{route('user.contact.us.store')}}" method="post">
        @csrf
        <div class="get-a-free-quote-section-content">
            <p class="mb-3">Contact our Kitchen renovation experts serving calgary, edmonton & vancouver</p>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text"  class="form-control mb-3" placeholder="First name" name="name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control mb-3" placeholder="last name" name="lastname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control mb-3" placeholder="Phone no" name="phone" required>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control mb-3" placeholder="E-mail" name="email" required>
                    </div>
                </div>
                <textarea class="form-control mb-3" placeholder="Enter your message" rows="5" id="comment" name="message" required></textarea>

            </form>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
