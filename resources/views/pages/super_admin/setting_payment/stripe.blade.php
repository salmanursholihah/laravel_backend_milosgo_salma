{{-- Form --}}
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h4 class="paypal">PayPal Configuration</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control">
                        <option>Enable</option>
                        <option>Disable</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Mode</label>
                    <select class="form-control">
                        <option>Sandbox</option>
                        <option>Live</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Currency</label>
                    <input type="text" class="form-control" value="IDR">
                </div>

                <div class="form-group">
                    <label>Client ID</label>
                    <input type="text" class="form-control" value="PAYPAL_CLIENT_ID">
                </div>

                <div class="form-group">
                    <label>Secret Key</label>
                    <input type="password" class="form-control" value="PAYPAL_SECRET">
                </div>

                <button class="btn btn-success">
                    <i class="fas fa-save"></i> Save Configuration
                </button>
            </form>
