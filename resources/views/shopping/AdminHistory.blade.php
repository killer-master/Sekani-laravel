@extends('layouts.app')

@section('content')
    <style>
        .admin-orders-page {
            min-height: 100vh;
            background: #f5f6f8;
        }

        .admin-orders-heading {
            color: #24211f;
            letter-spacing: -.03em;
        }

        .admin-orders-eyebrow {
            color: var(--sekani-color);
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .admin-order-card {
            border: 1px solid #ece9e6;
            border-radius: 1.15rem;
            box-shadow: 0 8px 26px rgba(34, 30, 27, .045);
            transition: box-shadow .2s ease, transform .2s ease;
        }

        .admin-order-card:hover {
            box-shadow: 0 14px 34px rgba(34, 30, 27, .08);
            transform: translateY(-2px);
        }

        .admin-order-image {
            width: 88px;
            height: 88px;
            flex: 0 0 88px;
            object-fit: cover;
        }

        .admin-order-label {
            color: #8a8580;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .admin-order-value {
            color: #292521;
            overflow-wrap: anywhere;
        }

        .admin-order-status-button {
            border: 1px solid #ebe7e3;
            border-radius: 999px;
            background: #fff;
            padding: .35rem;
        }

        .admin-order-status-button:hover {
            border-color: var(--sekani-color);
        }

        .admin-order-total {
            color: #292521;
            font-size: 1.35rem;
            font-weight: 750;
        }

        @media (max-width: 575.98px) {
            .admin-orders-container {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important;
            }

            .admin-order-card .card-body {
                padding: 1rem !important;
            }

            .admin-order-image {
                width: 68px;
                height: 68px;
                flex-basis: 68px;
            }
        }
    </style>

    <main class="admin-orders-page">
        <div class="container py-5 admin-orders-container">
            <header class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-4">
                <div>
                    <a href="{{ route('cart.index') }}" class="btn btn-light border rounded-pill px-3 mb-4">
                        <i class="fa-solid fa-arrow-left me-2" aria-hidden="true"></i>Back to cart
                    </a>
                    <div class="admin-orders-eyebrow mb-2">Order management</div>
                    <h1 class="admin-orders-heading h2 fw-bold mb-1">Customer orders</h1>
                    <p class="text-muted mb-0">Review order details and update their status.</p>
                </div>
                <div class="rounded-4 bg-white border px-4 py-3 shadow-sm">
                    <div class="admin-order-label">Total records</div>
                    <div class="fs-4 fw-bold">{{ $historyss->total() }}</div>
                </div>
            </header>

            <section class="row g-3" aria-label="Customer order history">
                @forelse ($historyss as $history)
                    @php
                        $statusColors = [
                            'added' => 'warning',
                            'placed' => 'primary',
                            'shipped' => 'info',
                            'delivered' => 'success',
                            'canceled' => 'danger',
                        ];
                        $statusClass = $statusColors[$history->status] ?? 'secondary';
                        $statusModalId = 'admin-order-status-' . $history->id;
                    @endphp

                    <div class="col-12">
                        <article class="card admin-order-card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 pb-3 mb-3 border-bottom">
                                    <div>
                                        <div class="admin-order-label mb-1">
                                            {{ $history->status === 'added' ? 'Cart item' : 'Order reference' }}
                                        </div>
                                        <div class="fw-bold fs-5 admin-order-value">
                                            {{ $history->status === 'added' ? 'Order in progress' : ($history->ref ?: 'Order #' . $history->id) }}
                                        </div>
                                    </div>

                                    <button type="button" class="admin-order-status-button"
                                        data-bs-toggle="modal" data-bs-target="#{{ $statusModalId }}"
                                        aria-label="Change status for order {{ $history->ref ?: $history->id }}">
                                        <span class="badge bg-{{ $statusClass }} rounded-pill px-3 py-2">
                                            {{ $history->status === 'added' ? 'In progress' : ucfirst($history->status) }}
                                        </span>
                                        <i class="fa-solid fa-pen ms-2 me-2 text-muted" aria-hidden="true"></i>
                                    </button>
                                </div>

                                <div class="row align-items-center g-4">
                                    <div class="col-lg-7">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{ asset('uploads/eatery/' . $history->eatery->image) }}"
                                                alt="{{ $history->eatery->name }}"
                                                class="admin-order-image rounded-4">
                                            <div class="min-w-0">
                                                <div class="admin-order-label mb-1">Item ordered</div>
                                                <h2 class="h5 fw-bold admin-order-value mb-2">{{ $history->eatery->name }}</h2>
                                                <div class="small text-muted">
                                                    <i class="fa-regular fa-calendar me-1" aria-hidden="true"></i>
                                                    {{ $history->created_at->format('d M Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-lg-2">
                                        <div class="admin-order-label mb-1">Quantity</div>
                                        <div class="fw-semibold admin-order-value">{{ $history->quantity }} item(s)</div>
                                    </div>

                                    <div class="col-6 col-lg-3 text-lg-end">
                                        <div class="admin-order-label mb-1">Order total</div>
                                        <div class="admin-order-total">₦{{ number_format($history->amount, 2) }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="row g-3 pt-3 border-top">
                                            <div class="col-md-4">
                                                <div class="admin-order-label mb-1">Customer</div>
                                                <div class="admin-order-value fw-semibold">{{ $history->user->name }}</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="admin-order-label mb-1">Email</div>
                                                <div class="admin-order-value">{{ $history->user->email }}</div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="admin-order-label mb-1">Delivery address</div>
                                                <div class="admin-order-value">{{ $history->address ?: 'No address provided' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="modal fade" id="{{ $statusModalId }}" tabindex="-1"
                        aria-labelledby="{{ $statusModalId }}-title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content border-0 rounded-4 shadow">
                                <form action="{{ route('AdminHistory.update', $history->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header border-0 pb-0">
                                        <h2 class="modal-title fs-5 fw-bold" id="{{ $statusModalId }}-title">Update status</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="small text-muted">Choose the current status for this order.</p>
                                        <label class="form-label fw-semibold" for="{{ $statusModalId }}-select">Order status</label>
                                        <select class="form-select" name="status" id="{{ $statusModalId }}-select" required>
                                            <option value="added" @selected($history->status === 'added')>Added to cart</option>
                                            <option value="placed" @selected($history->status === 'placed')>Placed</option>
                                            <option value="shipped" @selected($history->status === 'shipped')>Shipped</option>
                                            <option value="canceled" @selected($history->status === 'canceled')>Canceled</option>
                                            <option value="delivered" @selected($history->status === 'delivered')>Delivered</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer border-0 pt-0">
                                        <button type="button" class="btn btn-light rounded-pill px-3" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary rounded-pill px-4">Save status</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card border-0 rounded-4 shadow-sm">
                            <div class="card-body text-center py-5">
                                <div class="display-6 text-muted mb-3"><i class="fa-solid fa-box-open" aria-hidden="true"></i></div>
                                <h2 class="h5 fw-bold">No orders yet</h2>
                                <p class="text-muted mb-0">Customer orders will show here when they come in.</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </section>

            @if ($historyss->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $historyss->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </main>
@endsection
