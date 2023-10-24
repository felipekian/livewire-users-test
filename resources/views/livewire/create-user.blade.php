<form wire:submit='save'>
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input wire:model="name" type="text" class="form-control" name="name" id="name" aria-describedby="name"
            placeholder="Your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email</label>
        <input wire:model="email" type="email" class="form-control" name="email" id="email" aria-describedby="email"
            placeholder="Your email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label fw-bold">Password</label>
        <input wire:model="password" type="password" class="form-control" name="password" id="password"
            aria-describedby="password" placeholder="password">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>