<div class="get-a-free-quote-section">
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
                        <input type="text" class="form-control mb-3" placeholder="First name" name="firstname">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control mb-3" placeholder="last name" name="lastname">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control mb-3" placeholder="Phone no" name="phone">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control mb-3" placeholder="E-mail" name="email">
                    </div>
                </div>
                <textarea class="form-control mb-3" placeholder="Enter your message" rows="5" id="comment" name="text"></textarea>

            </form>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
