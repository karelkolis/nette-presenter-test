<?php

declare(strict_types=1);

namespace FrontModule;


final class HomepagePresenter extends \App\Presenters\BasePresenter
{
	public function renderDefault(): void
	{
		$this->template->anyVariable = 'any value';
	}
}
