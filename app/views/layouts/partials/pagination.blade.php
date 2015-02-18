@if ($paginator->getLastPage() > 1)

	<div>
		<a href="{{ $paginator->getUrl($paginator->getCurrentPage()-1) }}" class="item{{ ($paginator->getCurrentPage() == 1) ? ' disabled' : '' }}">
			<span class="fa-stack text-orange">
				<i class="fa fa-circle-thin fa-stack-2x"></i>
				<i class="fa fa-angle-left fa-stack-1x"></i>
			</span>
		</a>
		<span><span class="{{ ($paginator->getCurrentPage() == 1) ? '' : 'text-orange' }}">{{$paginator->getCurrentPage()}}</span> / <span class="{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? '' : 'text-orange' }} ">{{$paginator->getLastPage()}}</span>
		<a href="{{ $paginator->getUrl($paginator->getCurrentPage()+1) }}" class="item{{ ($paginator->getCurrentPage() == $paginator->getLastPage()) ? ' disabled' : '' }}">
			<span class="fa-stack text-orange">
				<i class="fa fa-circle-thin fa-stack-2x"></i>
				<i class="fa fa-angle-right fa-stack-1x"></i>
			</span>
		</a>
	</div>
 
@endif