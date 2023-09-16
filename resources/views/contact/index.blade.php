<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Contatos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold mb-4">Seus Contatos</h3>
                        <a href="{{ route('contact.create') }}" class="btn btn-primary">Adicionar Contato</a>
                    </div>
                    
                    <div class="row">
                        <table class="table table-striped mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                    <th scope="col"</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    
                                    <td class="px-6 py-4 text-center">{{ $contact->name }}</td>
                                    <td class="px-6 py-4 text-center">{{ $contact->phone }}</td>
                                    <td class="px-6 py-4 text-center">{{ $contact->email }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}" class="btn btn-primary">Editar</a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('contact.destroy', ['contact' => $contact->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
