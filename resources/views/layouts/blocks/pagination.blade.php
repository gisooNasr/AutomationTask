<?php
// config
$link_limit = 7;
?>
@if ($paginator->lastPage() > 1)



    <nav aria-label="...">
        <ul class="pagination pagination-rounded" >

          <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->withQueryString()->url(1) }}">
              <i class="fa fa-angle-left"></i>

            </a>
          </li>

          @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
               $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)

                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}" aria-current="page">
                    <a href="{{ $paginator->withQueryString()->url($i) }}" class="page-link" href="#">{{ $i }}</a>
                  </li>
            @endif
        @endfor
        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->withQueryString()->url($paginator->lastPage()) }}" tabindex="-1" aria-disabled="true">
                <i class="fa fa-angle-right"></i>

            </a>

          </li>


        </ul>
      </nav>
@endif
