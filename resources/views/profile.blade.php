<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae sed, necessitatibus ipsa laboriosam consequatur eos beatae atque eaque dolores eveniet, quae neque sapiente fugit corporis non, alias architecto asperiores. Eveniet voluptas minima commodi, error provident aliquam debitis, aliquid impedit magni iusto quos reiciendis adipisci necessitatibus, dolorum nulla delectus explicabo ea accusamus ad fuga similique accusantium sequi nisi perspiciatis. Nostrum consequuntur veritatis perspiciatis dolor eos quas est unde nisi facere eius, officia delectus illo vero ad possimus cupiditate quae cumque odit minus exercitationem magni quaerat molestias! Minus nihil, vitae, quasi voluptas dolorum animi illum possimus provident, necessitatibus consectetur sunt debitis?</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
