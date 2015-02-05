# Visual Paginator
Visual Paginator for Nette Framework and Bootstrap

##Installation
The best way to install aleswita/visualpaginator is using [Composer](http://getcomposer.org/):
```sh
$ composer require aleswita/visualpaginator:dev-master
```

## Usage
#### Presenter
```php
final class HomePresenter extends BasePresenter
{
  ...
  ...

  /**
    * renderDefault
    */
  public function renderDefault()
  {
    $dataSource = $this->model->dataSource();
    $this["paginator"]->setItemCount($dataSource->count());
    $dataSource->applyLimit($this["paginator"]->getItemsPerPage(),$this["paginator"]->getOffset());

    $this->template->items = $dataSource;
  }

  /**
    * paginator component
    * @return AlesWita\Components\VisualPaginator
    */
  protected function createComponentPaginator()
  {
    return $visualPaginator = new \AlesWita\Components\VisualPaginator;
  }
}
```
#### Template
```html
{control paginator}
```


#### More options
You can change count items per page:
```php
$visualPaginator->canSetItemsPerPage();
```

You can change default options for items per page:
```php
$visualPaginator->canSetItemsPerPage([10 => 10,12 => 12,15 => 15]);
```

You can change render template:
```php
$visualPaginator->setPaginatorTemplate(__DIR__."template.latte");
```

You can change default values for page and count items per page:
```php
$visualPaginator->setDefaultPage(5);
$visualPaginator->setDefaultItemsPerPage(100);
```
