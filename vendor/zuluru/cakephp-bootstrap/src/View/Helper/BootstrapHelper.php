<?php
namespace ZuluruBootstrap\View\Helper;

use Cake\Routing\Router;
use Cake\View\Helper;

class BootstrapHelper extends Helper {
	public $helpers = ['Html'];

	public function accordion(string $content, array $options = []): string {
		$options += [
			'accordion' => 'accordion',
			'multipleOpen' => false,
		];

		return $this->Html->tag('div', $content, [
			'class' => 'accordion',
			'id' => $options['accordion'],
			// @todo
			'aria-multiselectable' => ($options['multipleOpen'] ? 'true' : 'false'),
		]);
	}

	/**
	 * @param $heading string
	 * @param $content string
	 */
	public function panel(string $heading, string $content): string {
		return $this->Html->tag('div', $heading . $content, [
			'class' => 'accordion-item',
		]);
	}

	/**
	 * @param $id string
	 * @param $heading string
	 * @param $options mixed[]
	 */
	public function panelHeading(string $id, string $heading, array $options = []): string {
		$options += [
			'collapsed' => true,
			'tag' => 'div',
			'extraContent' => false,
		];

		$content = $this->accordionButton($heading, [
			'class' => 'accordion-button' . ($options['collapsed'] ? ' collapsed' : ''),
			'data-bs-toggle' => 'collapse',
			'data-bs-target' => "#{$id}Content",
			'aria-expanded' => ($options['collapsed'] ? 'false' : 'true'),
			'aria-controls' => "{$id}Content",
			'escape' => false,
		]);

		if ($options['extraContent']) {
			$content .= ' ' . $options['extraContent'];
		}

		return $this->Html->tag($options['tag'], $content, ['class' => 'accordion-header', 'id' => "{$id}Heading"]);
	}

	/**
	 * @param $content string
	 * @param $id string
	 */
	public function panelContent(string $id, string $content = '', array $options = []): string {
		$options += [
			'collapsed' => true,
			'dynamicUrl' => false,
			'accordion' => 'accordion',
		];

		$body = $this->Html->tag('div', $content, [
			'class' => 'accordion-body',
		]);

		$classes = ['accordion-collapse', 'collapse'];
		if (!$options['collapsed']) {
			$classes[] = 'show';
		}
		if ($options['dynamicUrl']) {
			$classes[] = 'dynamic-load';
		}
		if (array_key_exists('class', $options)) {
			array_unshift($classes, $options['class']);
		}

		return $this->Html->tag('div', $body, [
			'id' => "{$id}Content",
			'class' => implode(' ', $classes),
			'aria-labelledby' => "{$id}Heading",
			'data-bs-parent' => "#{$options['accordion']}",
			'data-selector' => ($options['dynamicUrl'] ? "#{$id}Panel" : false),
			'data-url' => ($options['dynamicUrl'] ? Router::url($options['dynamicUrl']) : false),
		]);
	}

	/**
	 * @param $text string
	 * @param $options mixed[]
	 */
	public function accordionButton(string $text, array $options = []): string {
		$options += [
			'type' => 'button',
			'escape' => true,
		];

		return $this->Html->tag('button', $text, $options);
	}

	public static function navPillLinkClasses(): array {
		return ['nav-link'];
	}

	public function navPill(string $content): string {
		return $this->Html->tag('li', $content, ['class' => 'nav-item']);
	}

	public function navPills(array $links): string {
		$pills = [];
		foreach ($links as $link) {
			$pills[] = $this->navPill($link);
		}
		return $this->Html->tag('ul', implode('', $pills), ['class' => 'nav nav-pills']);
	}
}
