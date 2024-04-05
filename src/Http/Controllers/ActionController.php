<?php

namespace Pavloniym\ActionButtons\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Http\Requests\ActionRequest;
use Laravel\Nova\Http\Controllers\ActionController as NovaActionController;

class ActionController extends NovaActionController
{
    /**
     * @param ActionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get(ActionRequest $request)
    {
        $action = $this->availableActions($request, $request->newResource())
            ->first(function ($action) use ($request) {
                return $action->uriKey() === $request->query('action');
            });

        abort_unless($action instanceof Action, 404);

        return response()->json(
            $action
        );
    }
}
