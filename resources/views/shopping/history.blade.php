@extends('layouts.app')

@section('content')
    <div style="background: linear-gradient(180deg, #f4f6fb 0%, #eef2f8 100%); min-height: 100vh;">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <a href="{{ route('cart.index') }}" class="btn btn-light border shadow-sm rounded-pill px-3">
                        <i class="bi bi-arrow-left me-2"></i>Back
                    </a>
                </div>
                <div>
                    <h3 class="mb-0 fw-bold text-dark">Order History</h3>
                </div>
            </div>

            <div class="row g-4">
                @forelse ($historys as $history)
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden" style="background: #ffffff;">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap justify-content-between align-items-center px-4 pt-4 pb-3 border-bottom">
                                    <div>
                                        @if($history->status == 'added')
                                            <div class="text-warning fw-bold small text-uppercase tracking-wide">Order still in progress</div>
                                        @elseif ($history->status == 'delivered')
                                            <div class="text-primary fw-bold small text-uppercase tracking-wide">Order delivered</div>
                                        @else
                                            <div class="text-dark fw-bold small text-uppercase tracking-wide">Order {{ $history->ref }}</div>
                                        @endif
                                    </div>

                                    <div>
                                        @php
                                            $statusColor = [
                                                'added' => 'warning',
                                                'placed' => 'primary',
                                                'processing' => 'info',
                                                'delivered' => 'success',
                                                'cancelled' => 'danger',
                                            ];
                                            $statusClass = $statusColor[$history->status] ?? 'secondary';
                                        @endphp

                                        <span class="badge bg-{{ $statusClass }} rounded-pill px-3 py-2 fs-6">
                                            {{ $history->status == 'added' ? 'In Progress' : ucfirst($history->status) }}
                                        </span>
                                    </div>
                                </div>

                                <div class="row align-items-center px-4 py-4 g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative" style="width: 90px; height: 90px; flex-shrink: 0;">
                                                <img src="{{ asset('uploads/eatery/'.$history->eatery->image) }}"
                                                     alt="{{ $history->eatery->name }}"
                                                     class="img-fluid rounded-4 shadow-sm w-100 h-100"
                                                     style="object-fit: cover;">
                                            </div>

                                            <div>
                                                <div class="text-muted small mb-1">Item Ordered</div>
                                                <div class="fw-bold fs-5 text-dark">{{ $history->eatery->name }}</div>
                                                <div class="text-muted small mt-1">
                                                    {{ $history->created_at->format('d M, Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="text-muted small text-uppercase tracking-wide">Quantity</div>
                                        <div class="fw-bold fs-5 text-dark">{{ $history->quantity }} item(s)</div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="text-muted small text-uppercase tracking-wide text-md-end">Total</div>
                                        <div class="fw-bold fs-4 text-dark d-flex align-items-center justify-content-md-end justify-content-start h-100">
                                            ${{ number_format($history->amount, 2) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body text-center py-5">
                                <div class="display-6 mb-2">📦</div>
                                <h5 class="fw-bold text-dark">No order history yet</h5>
                                <p class="text-muted mb-0">Your recent orders will appear here.</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            @if(method_exists($historys, 'links'))
                <div class="d-flex justify-content-center mt-5">
                    {{ $historys->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
@endsection
